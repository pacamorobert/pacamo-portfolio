@extends('layouts.app')

@section('title', config('portfolio.site_name'))

@section('content')
    {{-- ============================================================
         Bio / Hero
    ============================================================== --}}
    <section id="bio" class="relative isolate overflow-hidden hbb-section">
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

                        <div id="education" class="mb-16">
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
         Contact
    ============================================================== --}}
    <section id="contact" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Contact</div>
            <div class="prose prose-lg dark:prose-invert text-gray-800 dark:text-gray-200 text-center">
                <p>Feel free to reach out! I'm always happy to discuss research, collaborations, or just say hello.</p>
            </div>
        </div>
        <div class="flex flex-col items-center px-6 pb-16">
            <div class="flex flex-wrap justify-center gap-4 mt-6">
                @foreach (config('portfolio.social') as $social)
                    <a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}" title="{{ $social['label'] }}"
                        class="w-14 h-14 flex items-center justify-center rounded-full bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-400 shadow-md hover:shadow-xl hover:scale-110 hover:-translate-y-1 transition-all duration-300 border border-gray-200 dark:border-gray-700">
                        <i class="{{ $social['icon'] }} text-xl"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection