@extends('layouts.app')

@section('title', 'Experience — ' . config('portfolio.site_name'))

@section('content')
    {{-- Experience --}}
    <section id="section-resume-experience" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Work Experience</div>
        </div>
        <div class="flex flex-col items-center px-6 pb-8">
            <div class="container max-w-3xl w-full">

                @foreach (config('portfolio.experience') as $i => $exp)
                    <div class="relative pb-12 pl-16">
                        @if (!$loop->last)
                            <div class="absolute left-[1.375rem] top-4 bottom-0 w-px bg-gray-200 dark:bg-gray-700"></div>
                        @endif
                        <div class="absolute left-0 top-1 flex h-11 w-11 items-center justify-center rounded-full bg-primary-100 dark:bg-primary-900/50 text-primary-600 dark:text-primary-400 shadow-md">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <div class="group bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm rounded-2xl ring-1 ring-zinc-900/5 dark:ring-white/10 shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:shadow-primary-500/10 hover:-translate-y-1">
                            <div class="p-8 space-y-3">
                                <div class="flex flex-wrap items-start justify-between gap-2">
                                    <h3 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-zinc-100 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">{{ $exp['role'] }}</h3>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-primary-100 text-primary-800 dark:bg-primary-900/40 dark:text-primary-300">
                                        {{ \Carbon\Carbon::parse($exp['start'] . '-01')->format('M Y') }} – {{ $exp['end'] ? \Carbon\Carbon::parse($exp['end'] . '-01')->format('M Y') : 'Present' }}
                                    </span>
                                </div>
                                <p class="text-primary-600 dark:text-primary-400 font-medium">{{ $exp['org'] }}</p>
                                <p class="text-zinc-600 dark:text-zinc-400 leading-relaxed">{{ $exp['summary'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Skills --}}
    <section id="section-resume-skills" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Skills & Hobbies</div>
        </div>
        <div class="flex flex-col items-center px-6 pb-8">
            <div class="container max-w-3xl w-full grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach (config('portfolio.skills') as $skillGroup)
                    <div class="bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm rounded-2xl ring-1 ring-zinc-900/5 dark:ring-white/10 shadow-lg p-8 space-y-5">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white">{{ $skillGroup['name'] }}</h4>
                        @foreach ($skillGroup['items'] as $skill)
                            <div>
                                <div class="flex justify-between text-sm mb-1.5">
                                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ $skill['label'] }}</span>
                                    <span class="text-gray-400">{{ $skill['level'] }}/5</span>
                                </div>
                                <div class="h-2 rounded-full bg-gray-100 dark:bg-gray-800 overflow-hidden">
                                    <div class="h-full rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 transition-all duration-500" style="width: {{ $skill['level'] / 5 * 100 }}%"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Awards --}}
    <section id="section-resume-awards" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Awards</div>
        </div>
        <div class="flex flex-col items-center px-6 pb-8">
            <div class="container max-w-3xl w-full flex flex-col space-y-3">
                @foreach (config('portfolio.awards') as $award)
                    <div class="pub-list-item view-citation text-gray-800 dark:text-gray-200" style="margin-bottom: 1rem;">
                        <i class="fa-solid fa-trophy pub-icon mr-2 text-amber-500" aria-hidden="true"></i>
                        <strong>{{ $award['title'] }}</strong>
                        ({{ $award['date'] }}). {{ $award['awarder'] }}. — {{ $award['summary'] }}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Languages --}}
    <section id="section-resume-languages" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Languages</div>
        </div>
        <div class="flex flex-col items-center px-6 pb-8">
            <div class="container max-w-3xl w-full grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach (config('portfolio.languages') as $lang)
                    <div class="bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm rounded-2xl ring-1 ring-zinc-900/5 dark:ring-white/10 shadow-lg p-8">
                        <div class="flex justify-between text-base mb-2">
                            <span class="font-bold text-gray-900 dark:text-white">{{ $lang['name'] }}</span>
                            <span class="text-gray-400 text-sm">{{ $lang['label'] }}</span>
                        </div>
                        <div class="h-2 rounded-full bg-gray-100 dark:bg-gray-800 overflow-hidden">
                            <div class="h-full rounded-full bg-gradient-to-r from-primary-500 to-secondary-500" style="width: {{ $lang['level'] / 5 * 100 }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection