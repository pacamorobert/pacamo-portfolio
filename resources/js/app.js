/* HugoBlox Academic CV port - client behavior: theme toggle and theme pack. */

/* Theme (dark / light) toggle */
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.theme-toggle');
    const tools = (mode) => {
        document.documentElement.classList.toggle('dark', mode === 'dark');
    };
    const current = () =>
        (localStorage.getItem('hb-theme') ??
            (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));

    if (toggle) {
        toggle.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('hb-theme', 'light');
                tools('light');
            } else {
                localStorage.setItem('hb-theme', 'dark');
                tools('dark');
            }
        });
    }

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('hb-theme')) tools(e.matches ? 'dark' : 'light');
    });

    window.current = current;
});