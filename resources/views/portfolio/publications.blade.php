@extends('layouts.app')

@section('title', 'Publications — ' . config('portfolio.site_name'))

@section('content')
    <section id="section-content-collection" class="relative isolate hbb-section">
        <div class="flex flex-col items-center max-w-prose mx-auto gap-3 justify-center px-6 pt-16">
            <div class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Publications</div>
        </div>
        <div class="flex flex-col items-center px-6 pb-8">
            <div class="mt-16 sm:mt-20 container max-w-3xl w-full">
                <div class="flex flex-col space-y-3">
                    @foreach (array_merge(config('portfolio.featured_publications'), config('portfolio.recent_publications')) as $pub)
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
@endsection