/* HugoBlox Academic CV port - client behavior: theme toggle, theme pack,
   and site search modal (Alpine powered, backed by a client-side index). */

document.addEventListener('alpine:init', () => {
    Alpine.store('search', { open: false });

    Alpine.data('searchModal', () => ({
        query: '',
        filters: ['all', 'publications', 'talks', 'news', 'projects'],
        activeFilter: 'all',
        results: [],
        selected: -1,

        init() {
            this.$watch('query', () => this.search());
            this.$watch('activeFilter', () => this.search());
            this.$watch('$store.search.open', (open) => {
                if (open) {
                    document.body.classList.add('overflow-hidden');
                    this.$nextTick(() => this.$refs.searchInput?.focus());
                } else {
                    document.body.classList.remove('overflow-hidden');
                }
            });
            this.$el.addEventListener('click', (e) => {
                if (e.target === this.$el) this.$store.search.open = false;
            });
        },

        search() {
            const q = this.query.trim().toLowerCase();
            this.selected = -1;
            if (!q) {
                this.results = [];
                return;
            }
            const source = window.PORTFOLIO_SEARCH_INDEX || [];
            this.results = source
                .filter((item) => this.activeFilter === 'all' || item.type === this.activeFilter)
                .filter((item) =>
                    `${item.title} ${item.excerpt} ${(item.tags || []).join(' ')}`
                        .toLowerCase()
                        .includes(q),
                )
                .slice(0, 8);
        },

        keydown(e) {
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                if (this.results.length) {
                    this.selected = (this.selected + 1) % this.results.length;
                }
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                if (this.results.length) {
                    this.selected =
                        this.selected <= 0 ? this.results.length - 1 : this.selected - 1;
                }
            } else if (e.key === 'Enter' && this.selected >= 0 && this.results[this.selected]) {
                e.preventDefault();
                window.location.href = this.results[this.selected].url;
            }
        },
    }));
});

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

    /* Open search via header button or keyboard shortcut */
    const openSearch = () => {
        if (window.Alpine) {
            window.Alpine.store('search').open = true;
        }
    };

    document.querySelectorAll('[data-search-toggle]').forEach((btn) => {
        btn.addEventListener('click', openSearch);
    });
    document.addEventListener('keydown', (e) => {
        if ((e.metaKey || e.ctrlKey) && e.key.toLowerCase() === 'k') {
            e.preventDefault();
            openSearch();
        }
    });

    window.current = current;
});