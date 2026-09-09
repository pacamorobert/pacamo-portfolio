@extends('layouts.app')

@section('title', config('portfolio.site_name'))

@section('content')
    {{-- ============================================================
         Bio / Hero
    ============================================================== --}}
    <section id="section-resume-biography-3" class="relative isolate overflow-hidden hbb-section">
        <div class="absolute inset-0 -z-10 home-section-mesh">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-500/20 via-transparent to-secondary-500/20"></div>
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-secondary-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="resume-biography py-8 px-4 sm:py-12 md:py-16 lg:py-24 xl:py-32 relative overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8 items-start">

                    {{-- Left column --}}
                    <div class="md:col-span-4 flex flex-col items-center text-center space-y-6 md:space-y-8">
                        <div class="avatar-wrapper mb-4 relative" style="width: 200px; height: 200px;">
                            <img class="avatar rounded-full border-4 border-white shadow-2xl dark:border-gray-800" src="{{ asset(config('portfolio.avatar')) }}"
                                alt="{{ config('portfolio.name') }}" width="200" height="200"
                                style="width: 200px; height: 200px; object-fit: cover;"
                                onerror="this.onerror=null;this.src='data:image/svg+xml,'+encodeURIComponent('<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 200 200\'><rect width=\'200\' height=\'200\' rx=\'100\' fill=\'%236366f1\'/><text x=\'100\' y=\'115\' font-size=\'60\' text-anchor=\'middle\' fill=\'white\' font-family=\'serif\'>{{ substr(config('portfolio.name'), 0, 1) }}</text></svg>');">
                            <span class="avatar-emoji absolute -bottom-1 -right-1 text-2xl" aria-hidden="true">{{ config('portfolio.status_icon') }}</span>
                        </div>

                        <div class="space-y-3">
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 dark:text-white leading-tight" style="font-family: var(--hb-font-heading);">
                                {{ config('portfolio.name') }}
                            </h1>
                            <p class="text-lg text-gray-600 dark:text-gray-400">({{ config('portfolio.pronouns') }})</p>
                            <p class="text-2xl font-semibold text-primary-600 dark:text-primary-400">{{ config('portfolio.role') }}</p>
                            <p class="text-lg text-gray-700 dark:text-gray-300">
                                <a href="{{ config('portfolio.affiliation.url') }}" target="_blank" rel="noopener" class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors">{{ config('portfolio.affiliation.name') }}</a>
                            </p>
                        </div>

                        <div class="flex flex-wrap justify-center gap-4">
                            @foreach (config('portfolio.social') as $social)
                                <a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}" title="{{ $social['label'] }}"
                                    class="w-12 h-12 flex items-center justify-center rounded-full bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 shadow-md hover:shadow-xl hover:scale-110 hover:-translate-y-1 transition-all duration-300 border border-gray-200 dark:border-gray-700">
                                    <i class="{{ $social['icon'] }} text-lg"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Right column --}}
                    <div class="md:col-span-8">
                        <div class="mb-12">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-100 dark:bg-primary-900/50 rounded-full flex items-center justify-center">
                                    <i class="fa-regular fa-file-lines w-6 h-6 text-primary-600 dark:text-primary-400 text-xl flex items-center justify-center"></i>
                                </div>
                                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white tracking-tight">Professional Summary</h2>
                            </div>
                            <div class="prose prose-lg dark:prose-invert text-gray-800 dark:text-gray-200 text-base sm:text-lg leading-relaxed">
                                <p class="bio-text">{{ config('portfolio.bio.0') }}</p>
                            </div>
                        </div>

                        <div class="mb-16">
                            <a href="{{ asset(config('portfolio.resume')) }}" target="_blank" rel="noopener"
                                class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                                <i class="fa-solid fa-arrow-down w-5 h-5 mr-3 text-xl"></i>
                                Download CV
                            </a>
                        </div>

                        <div class="mb-16">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-100 dark:bg-primary-900/50 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-graduation-cap w-6 h-6 text-primary-600 dark:text-primary-400 text-xl flex items-center justify-center"></i>
                                </div>
                                <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white tracking-tight">Education</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                                @foreach (config('portfolio.education') as $edu)
                                    <div class="group h-full flex flex-col bg-gradient-to-br from-white/90 to-primary-50/30 dark:from-gray-800/90 dark:to-primary-900/20 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800 backdrop-blur-md">
                                        <div class="flex gap-4">
                                            <div class="flex-shrink-0 w-12 h-12 bg-white dark:bg-gray-800 ring-1 ring-gray-200 dark:ring-gray-700 rounded-full flex items-center justify-center shadow-md">
                                                <i class="fa-solid fa-school text-primary-600 dark:text-primary-400 text-xl"></i>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">{{ $edu['degree'] }}</p>
                                                <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">{{ $edu['start'] }} – {{ $edu['end'] ?? 'Present' }}</p>
                                                <p class="text-gray-700 dark:text-gray-300 text-base">{{ $edu['institution'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-100 dark:bg-primary-900/50 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-lightbulb w-6 h-6 text-primary-600 dark:text-primary-400 text-xl flex items-center justify-center"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white tracking-tight">Interests</h3>
                            </div>
                            <div class="flex flex-wrap gap-3">
                                @foreach (config('portfolio.interests') as $interest)
                                    <span class="inline-block bg-primary-50 dark:bg-gray-800 text-primary-800 dark:text-primary-200 text-base font-medium px-4 py-2 rounded-full border border-primary-200/50 dark:border-primary-800/50 hover:bg-primary-100 dark:hover:bg-primary-500 dark:hover:text-gray-900 dark:hover:border-primary-500 transition-all duration-200 cursor-default">
                                        {{ $interest }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         My Research
    ============================================================== --}}
    <section id="section-markdown" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">📚 My Research</div>
            <div class="prose prose-slate lg:prose-xl dark:prose-invert max-w-prose text-gray-700 dark:text-gray-300">
                @foreach (config('portfolio.research') as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         Featured Publications
    ============================================================== --}}
    <section id="papers" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 md:px-0 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Featured Publications</div>
        </div>
        <div class="flex flex-col items-center px-6">
            <div class="container px-8 mx-auto xl:px-5 py-5 lg:py-8 max-w-screen-lg">
                <div class="grid gap-10 md:grid-cols-2 lg:gap-10">
                    @foreach (config('portfolio.featured_publications') as $pub)
                        <div class="group bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm rounded-2xl ring-1 ring-zinc-900/5 dark:ring-white/10 shadow-lg overflow-hidden transition-all duration-300 ease-out hover:shadow-xl hover:shadow-primary-500/10 hover:-translate-y-2 focus-within:ring-2 focus-within:ring-primary-500/50" role="article">
                            <div class="relative overflow-hidden aspect-[16/9] bg-gradient-to-br from-zinc-100 to-zinc-200 dark:from-zinc-800 dark:to-zinc-900 flex items-center justify-center">
                                <i class="fa-solid fa-file-lines text-5xl text-zinc-300 dark:text-zinc-600 transition-transform duration-500 group-hover:scale-125"></i>
                                <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-8 space-y-4">
                                <div class="flex items-center gap-2">
                                    @foreach ($pub['tags'] ?? [] as $tag)
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-primary-100 text-primary-800 dark:bg-primary-900/40 dark:text-primary-300">{{ $tag }}</span>
                                    @endforeach
                                </div>
                                <h3 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-zinc-100 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200 leading-tight">
                                    <a href="{{ $pub['url'] }}" class="hover:underline">{{ $pub['title'] }}</a>
                                </h3>
                                <p class="text-zinc-600 dark:text-zinc-400 text-base leading-relaxed line-clamp-3">{{ $pub['excerpt'] ?? '' }}</p>
                                <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800">
                                    <div class="flex items-center gap-3 text-xs text-zinc-500 dark:text-zinc-500 flex-wrap mb-3">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <span class="relative flex-shrink-0 h-6 w-6 rounded-full bg-primary-100 dark:bg-gray-700 overflow-hidden">
                                                <img alt="avatar" class="rounded-full object-cover h-full w-full" src="{{ asset(config('portfolio.avatar')) }}" width="24" height="24" loading="lazy" onerror="this.style.display='none'">
                                            </span>
                                            <span class="truncate max-w-[9rem] text-sm">{{ data_get($pub['authors'], 0, config('portfolio.name')) }}</span>
                                        </div>
                                        <span class="opacity-40">•</span>
                                        <time class="hidden sm:inline whitespace-nowrap">{{ $pub['year'] }}</time>
                                        <span class="hidden sm:inline opacity-40">•</span>
                                        <span class="hidden sm:inline whitespace-nowrap">1 min read</span>
                                    </div>
                                    <div class="pt-2 border-t border-zinc-200/50 dark:border-zinc-700/50">
                                        <a href="{{ $pub['url'] }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 font-medium text-sm transition-all duration-300 group/link">
                                            <span>Read more</span>
                                            <i class="fa-solid fa-arrow-right w-4 h-4 text-xs transition-transform group-hover/link:translate-x-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         Recent Publications (citation list)
    ============================================================== --}}
    <section id="section-content-collection" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 md:px-0 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Recent Publications</div>
        </div>
        <div class="flex flex-col items-center px-6">
            <div class="mt-16 sm:mt-20 container max-w-3xl w-full">
                <div class="flex flex-col space-y-3">
                    @foreach (config('portfolio.recent_publications') as $pub)
                        <div class="pub-list-item view-citation text-gray-800 dark:text-gray-200" style="margin-bottom: 1rem;">
                            <i class="fa-regular fa-file-lines pub-icon mr-2" aria-hidden="true"></i>
                            @foreach ($pub['authors'] as $author)
                                <span class="article-metadata li-cite-author"><span>{{ $author }}</span></span>{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                            ({{ $pub['year'] }}).
                            <a href="{{ $pub['url'] }}" class="underline text-primary-600 dark:text-primary-400">{{ $pub['title'] }}</a>.
                            @if (!empty($pub['journal']))
                                <em>{{ $pub['journal'] }}</em>{!! !empty($pub['volume']) ? ', ' . e($pub['volume']) : '' !!}.
                            @endif
                            @if (!empty($pub['links']))
                                <div class="flex flex-wrap space-x-3 mt-2">
                                    @foreach ($pub['links'] as $link)
                                        @if (!empty($link['cite']))
                                            <button class="hb-attachment-link hb-attachment-link-small cursor-pointer" type="button" data-filename="cite.bib">
                                                <i class="{{ $link['icon'] }}" style="height: 1em;" aria-hidden="true"></i> {{ $link['label'] }}
                                            </button>
                                        @else
                                            <a class="hb-attachment-link hb-attachment-link-small" href="{{ $link['url'] }}" target="_blank" rel="noopener">
                                                <i class="{{ $link['icon'] }}" style="height: 1em;" aria-hidden="true"></i> {{ $link['label'] }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         Recent & Upcoming Talks
    ============================================================== --}}
    <section id="talks" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 md:px-0 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Recent & Upcoming Talks</div>
        </div>
        <div class="flex flex-col items-center px-6">
            <div class="container max-w-[65ch] mx-auto grid grid-cols-1 gap-6 my-5">
                @foreach (config('portfolio.talks') as $talk)
                    <div class="group bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm rounded-2xl ring-1 ring-zinc-900/5 dark:ring-white/10 shadow-lg overflow-hidden transition-all duration-300 ease-out hover:shadow-xl hover:shadow-primary-500/10 hover:-translate-y-2 focus-within:ring-2 focus-within:ring-primary-500/50" role="article">
                        <div class="p-8 space-y-4">
                            <div class="flex items-center gap-2">
                                @foreach ($talk['tags'] ?? [] as $tag)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-primary-100 text-primary-800 dark:bg-primary-900/40 dark:text-primary-300">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <h3 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-zinc-100 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200 leading-tight">
                                <a href="{{ $talk['url'] }}" class="hover:underline">{{ $talk['title'] }}</a>
                            </h3>
                            <p class="text-zinc-600 dark:text-zinc-400 text-base leading-relaxed line-clamp-3">{{ $talk['summary'] }}</p>
                            <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800">
                                <div class="flex items-center gap-3 text-xs text-zinc-500 dark:text-zinc-500 flex-wrap mb-3">
                                    <time class="whitespace-nowrap">{{ \Carbon\Carbon::parse($talk['date'])->format('M j, Y') }} {{ $talk['start'] }} — {{ $talk['end'] }}</time>
                                    <span class="opacity-40">•</span>
                                    <span class="hidden sm:inline whitespace-nowrap">{{ $talk['location'] }}</span>
                                </div>
                                <div class="pt-2 border-t border-zinc-200/50 dark:border-zinc-700/50">
                                    <a href="{{ $talk['url'] }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 font-medium text-sm transition-all duration-300 group/link">
                                        <span>View talk</span>
                                        <i class="fa-solid fa-arrow-right w-4 h-4 text-xs transition-transform group-hover/link:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         Recent News
    ============================================================== --}}
    <section id="news" class="relative isolate hbb-section" style="padding: 0;">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 md:px-0 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Recent News</div>
        </div>
        <div class="flex flex-col items-center px-6">
            <div class="container max-w-[65ch] mx-auto grid grid-cols-1 gap-6 my-5">
                @foreach (config('portfolio.news') as $post)
                    <div class="group bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm rounded-2xl ring-1 ring-zinc-900/5 dark:ring-white/10 shadow-lg overflow-hidden transition-all duration-300 ease-out hover:shadow-xl hover:shadow-primary-500/10 hover:-translate-y-2 focus-within:ring-2 focus-within:ring-primary-500/50" role="article">
                        <div class="relative overflow-hidden aspect-[16/9] bg-gradient-to-br from-zinc-100 to-zinc-200 dark:from-zinc-800 dark:to-zinc-900 flex items-center justify-center">
                            @if (!empty($post['trending']))
                                <div class="absolute top-3 right-3 z-10 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-black/55 backdrop-blur-sm text-white shadow-sm">
                                    <span>Trending</span>
                                    <span aria-hidden="true">🔥</span>
                                </div>
                            @endif
                            <i class="fa-solid fa-newspaper text-5xl text-zinc-300 dark:text-zinc-600 transition-transform duration-500 group-hover:scale-125"></i>
                            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-8 space-y-4">
                            <div class="flex items-center gap-2">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-primary-100 text-primary-800 dark:bg-primary-900/40 dark:text-primary-300">{{ $post['tag'] }}</span>
                            </div>
                            <h3 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-zinc-100 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200 leading-tight">
                                <a href="{{ $post['url'] }}" class="hover:underline">{{ $post['title'] }}</a>
                            </h3>
                            <p class="text-zinc-600 dark:text-zinc-400 text-base leading-relaxed line-clamp-3">{{ $post['excerpt'] }}</p>
                            <div class="pt-3 border-t border-zinc-100 dark:border-zinc-800">
                                <div class="flex items-center gap-3 text-xs text-zinc-500 dark:text-zinc-500 flex-wrap mb-3">
                                    <div class="flex items-center gap-2 min-w-0">
                                        <span class="relative flex-shrink-0 h-6 w-6 rounded-full bg-primary-100 dark:bg-gray-700 overflow-hidden">
                                            <img alt="avatar" class="rounded-full object-cover h-full w-full" src="{{ asset(config('portfolio.avatar')) }}" width="24" height="24" loading="lazy" onerror="this.style.display='none'">
                                        </span>
                                        <span class="truncate max-w-[9rem] text-sm">{{ $post['author'] }}</span>
                                    </div>
                                    <span class="opacity-40">•</span>
                                    <time class="hidden sm:inline whitespace-nowrap">{{ \Carbon\Carbon::parse($post['date'])->format('M j, Y') }}</time>
                                    <span class="hidden sm:inline opacity-40">•</span>
                                    <span class="hidden sm:inline whitespace-nowrap">2 min read</span>
                                </div>
                                <div class="pt-2 border-t border-zinc-200/50 dark:border-zinc-700/50">
                                    <a href="{{ $post['url'] }}" class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 font-medium text-sm transition-all duration-300 group/link">
                                        <span>Read more</span>
                                        <i class="fa-solid fa-arrow-right w-4 h-4 text-xs transition-transform group-hover/link:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         CTA Card
    ============================================================== --}}
    <section id="section-cta-card" class="relative isolate hbb-section">
        <div class="flex flex-col items-center px-6 py-16">
            <div class="w-full max-w-3xl bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-600 text-white shadow-2xl rounded-2xl p-10 sm:p-14 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold mb-4">👉 Build your own academic website like this</h2>
                <p class="text-white/90 leading-relaxed mb-2">This site is generated by Laravel — the free, open-source PHP framework trusted by 750,000+ developers.</p>
                <p class="text-white/90 leading-relaxed mb-6">Easily build anything with blocks — no-code required! From landing pages, second brains, and courses to academic resumés, conferences, and tech blogs.</p>
                <a href="https://laravel.com" target="_blank" rel="noopener"
                    class="inline-flex items-center px-8 py-3 bg-white text-primary-700 font-bold rounded-lg shadow-lg hover:bg-primary-50 hover:scale-105 transition-all duration-300">
                    Get Started
                </a>
            </div>
        </div>
    </section>
@endsection