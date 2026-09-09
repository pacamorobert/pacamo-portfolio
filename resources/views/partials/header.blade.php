<div class="page-header sticky top-0 z-30">
    <header id="site-header" class="header bg-[var(--hb-color-header-bg)]/80 backdrop-blur border-b border-gray-200/60 dark:border-gray-700/40" style="background-color: var(--hb-color-header-bg);">
        <nav class="navbar px-3 flex justify-start max-w-7xl mx-auto">
            <div class="order-0 h-full">
                <a class="navbar-brand" href="{{ route('home') }}" title="{{ config('portfolio.site_name') }}">{{ config('portfolio.site_name') }}</a>
            </div>

            <input id="nav-toggle" type="checkbox" class="hidden">
            <label for="nav-toggle" class="order-3 cursor-pointer flex items-center lg:hidden text-[var(--hb-color-header-fg)] lg:order-1" aria-label="Toggle menu">
                <svg id="show-button" class="h-6 w-6 fill-current block" viewBox="0 0 20 20"><title>Open Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0V0z"/></svg>
                <svg id="hide-button" class="h-6 w-6 fill-current hidden" viewBox="0 0 20 20"><title>Close Menu</title><polygon points="11 9 22 9 22 11 11 11 11 22 9 22 9 11 -2 11 -2 9 9 9 9 -2 11 -2" transform="rotate(45 10 10)"/></svg>
            </label>

            <ul id="nav-menu" class="navbar-nav order-3 hidden w-full pb-6 lg:order-1 lg:w-auto lg:space-x-2 lg:pb-0 xl:space-x-8 justify-start lg:flex flex-col lg:flex-row items-start lg:items-center">
                <li class="nav-item"><a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}#bio">Bio</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::routeIs('experience') ? 'active' : '' }}" href="{{ route('experience') }}">Experience</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#education">Education</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#contact">Contact</a></li>
            </ul>

            <div class="order-1 ml-auto flex items-center md:order-2 lg:ml-0">
                <div class="px-3 text-[var(--hb-color-header-fg)] hover:text-primary-500">
                    <button aria-label="Toggle theme" class="theme-toggle mt-1 cursor-pointer" accesskey="t" title="Toggle dark / light appearance">
                        <svg id="moon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="block dark:hidden"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
                        <svg id="sun" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden dark:block"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                    </button>
                </div>

                <div class="px-3">
                    <select onchange='document.documentElement.setAttribute("data-theme-pack",this.value);localStorage.setItem("hb-theme-pack",this.value)'
                            class="theme-select bg-transparent text-[var(--hb-color-header-fg)] border-none focus:ring-0 cursor-pointer text-sm font-medium dark:bg-transparent">
                        <option value="">Theme</option>
                        <option value="coffee">Coffee</option>
                        <option value="contrast">Contrast</option>
                        <option value="cupcake">Cupcake</option>
                        <option value="default">Default</option>
                        <option value="dracula">Dracula</option>
                        <option value="marine">Marine</option>
                        <option value="matcha">Matcha</option>
                        <option value="minimal">Minimal</option>
                        <option value="retro">Retro</option>
                        <option value="solar">Solar</option>
                        <option value="synthwave">Synthwave</option>
                    </select>
                    <script>
                        (function () {
                            const pack = localStorage.getItem('hb-theme-pack');
                            if (pack) {
                                document.documentElement.setAttribute('data-theme-pack', pack);
                                document.addEventListener('DOMContentLoaded', () => {
                                    const sel = document.querySelector('select[onchange*="data-theme-pack"]');
                                    if (sel) sel.value = pack;
                                });
                            }
                        })();
                    </script>
                </div>
            </div>
        </nav>
    </header>
</div>
