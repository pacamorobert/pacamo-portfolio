<div x-data="searchModal" x-show="$store.search.open" @keydown.escape.window="$store.search.open = false; document.body.classList.remove('overflow-hidden')" @keydown.cmd.k.window.prevent="$store.search.open = true; document.body.classList.add('overflow-hidden')" @keydown.ctrl.k.window.prevent="$store.search.open = true; document.body.classList.add('overflow-hidden')" x-cloak class="fixed inset-0 z-[100] bg-black/50 backdrop-blur-sm" style="display: none;" role="dialog" aria-modal="true" aria-label="Search">
    <div class="mx-auto mt-[10vh] w-full max-w-2xl px-4">
        <div class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900 shadow-2xl ring-1 ring-gray-900/10 dark:ring-white/10">
            <div class="flex items-center gap-3 border-b border-gray-200 dark:border-gray-800 px-4 py-3">
                <svg height="18" width="18" viewBox="0 0 512 512" fill="currentColor" class="text-gray-400 shrink-0">
                    <path d="M505 442.7l-99.7-99.7C426.9 349.3 448 306.7 448 256c0-141.2-114.8-256-256-256C50.8 0 0 50.8 0 197.8s114.8 256 256 256c50.7 0 93.4-21.1 123.9-42.7l99.7 100.7c4.7 4.7 12.3 4.7 17 0l8-8c4.6-4.7 4.6-12.3-.6-17.1zM256 416c-88.2 0-160-71.8-160-160S167.8 96 256 96s160 71.8 160 160-71.8 160-160 160z"/>
                </svg>
                <input type="text" x-ref="searchInput" x-model="query" @input="search()" placeholder="Search publications, talks, news…"
                    class="flex-1 bg-transparent text-lg outline-none text-gray-900 dark:text-gray-100 placeholder-gray-400">
                <kbd class="hidden sm:inline-block px-2 py-1 text-xs rounded-md bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400">ESC</kbd>
            </div>

            <div class="flex items-center gap-2 px-4 py-3 border-b border-gray-200 dark:border-gray-800 flex-wrap">
                <template x-for="filter in filters" :key="filter">
                    <button @click="activeFilter = (activeFilter === filter ? 'all' : filter)" :class="activeFilter === filter ? 'bg-primary-100 text-primary-700 dark:bg-primary-900 dark:text-primary-300' : 'bg-gray-100 text-gray-600 dark:bg-gray-800 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700'"
                        class="rounded-full px-3 py-1 text-xs font-medium transition-colors" type="button" x-text="filter.charAt(0).toUpperCase() + filter.slice(1)"></button>
                </template>
                <div class="ml-auto text-xs text-gray-400" x-text="results.length + ' results'"></div>
            </div>

            <div class="max-h-[50vh] overflow-y-auto divide-y divide-gray-200 dark:divide-gray-800" x-show="query">
                <template x-for="(result, i) in results" :key="i">
                    <a :href="result.url" class="block px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors group search-result">
                        <p class="text-xs uppercase tracking-wide text-gray-400 group-hover:text-primary-500" x-text="result.type"></p>
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100 mt-0.5" x-text="result.title"></p>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 line-clamp-2" x-text="result.excerpt"></p>
                    </a>
                </template>
                <p x-show="!results.length" class="px-6 py-8 text-center text-sm text-gray-500 dark:text-gray-400">No results found</p>
            </div>

            <div class="border-t border-gray-200 dark:border-gray-800 px-4 py-3 bg-gray-50 dark:bg-gray-900/50 flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                <span><kbd class="font-mono">↑</kbd> <kbd class="font-mono">↓</kbd> to navigate</span>
                <span><kbd class="font-mono">↵</kbd> to open</span>
            </div>
        </div>
    </div>
</div>