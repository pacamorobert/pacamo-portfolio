import { appendFileSync, existsSync } from "fs";
import { join } from "path";

export const GitPromptHistory = async ({ directory, $ }) => {
  let dirty = false;
  let lastPrompt = "";

  return {
    "chat.message": async (input, output) => {
      try {
        const textParts = output.parts
          .filter((p) => p.type === "text")
          .map((p) => p.text);
        lastPrompt = textParts.join("\n").trim();
        if (!lastPrompt) return;

        const timestamp = new Date().toISOString().replace("T", " ").slice(0, 19);
        const logEntry = `\n\n## ${timestamp}\n\n${lastPrompt}\n`;
        const logPath = join(directory, "PROMPT_LOG.md");

        if (!existsSync(logPath)) {
          const header = `# Prompt Log\n\nAuto-committed prompts from opencode sessions.\n\n---`;
          appendFileSync(logPath, header + logEntry);
        } else {
          appendFileSync(logPath, logEntry);
        }
        dirty = true;
      } catch (e) {
        console.error("[git-prompt-history] log failed:", e.message);
      }
    },

    event: async ({ event }) => {
      if (event.type === "session.idle" && dirty) {
        try {
          await $`git add -A`;
          const promptLine = lastPrompt.split("\n")[0].slice(0, 68).trim();
          const commitMsg = promptLine
            ? `opencode: ${promptLine}`
            : "opencode: session update";
          await $`git diff --cached --quiet || git commit -m ${commitMsg}`;
          await $`git push origin HEAD 2>&1 || true`;
        } catch (e) {
          console.error("[git-prompt-history] commit/push failed:", e.message);
        }
        dirty = false;
        lastPrompt = "";
      }
    },
  };
};
