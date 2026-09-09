@extends('layouts.app')

@section('title', 'Courses — ' . config('portfolio.site_name'))

@section('content')
    <section id="section-collection" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Courses</div>
            <p class="text-gray-600 dark:text-gray-400 text-center mb-6">Interactive courses and lectures I teach or maintain.</p>
        </div>
        <div class="flex flex-col items-center px-6 pb-8">
            <div class="container px-8 mx-auto xl:px-5 py-5 lg:py-8 max-w-screen-lg">
                <div class="grid gap-10 md:grid-cols-2 lg:gap-10">
                    @foreach (config('portfolio.courses') as $course)
                        <div class="group bg-white/90 dark:bg-zinc-900/90 backdrop-blur-sm rounded-2xl ring-1 ring-zinc-900/5 dark:ring-white/10 shadow-lg overflow-hidden transition-all duration-300 ease-out hover:shadow-xl hover:shadow-primary-500/10 hover:-translate-y-2 focus-within:ring-2 focus-within:ring-primary-500/50" role="article">
                            <div class="relative overflow-hidden aspect-[16/9] bg-gradient-to-br from-secondary-100 to-primary-100 dark:from-zinc-800 dark:to-zinc-900 flex items-center justify-center">
                                <i class="fa-solid fa-chalkboard-user text-5xl text-secondary-400 dark:text-secondary-900 transition-transform duration-500 group-hover:scale-125"></i>
                                <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-8 space-y-4">
                                @if (!empty($course['tag']))
                                    <div class="flex items-center gap-2">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-primary-100 text-primary-800 dark:bg-primary-900/40 dark:text-primary-300">{{ $course['tag'] }}</span>
                                    </div>
                                @endif
                                <h3 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-zinc-100 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors duration-200 leading-tight">
                                    <a href="{{ $course['url'] }}" class="hover:underline">{{ $course['title'] }}</a>
                                </h3>
                                <p class="text-zinc-600 dark:text-zinc-400 text-base leading-relaxed line-clamp-3">{{ $course['summary'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection