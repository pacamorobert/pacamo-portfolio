<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('portfolio.home');
    }

    public function experience()
    {
        return view('portfolio.experience');
    }

    public function projects()
    {
        return view('portfolio.projects');
    }

    public function publications()
    {
        return view('portfolio.publications');
    }

    public function courses()
    {
        return view('portfolio.courses');
    }

    /**
     * Build the client-side search index from the portfolio config.
     */
    public static function searchIndex(): array
    {
        $groups = [
            'publications' => array_merge(
                config('portfolio.featured_publications'),
                config('portfolio.recent_publications'),
            ),
            'talks' => config('portfolio.talks'),
            'news' => config('portfolio.news'),
            'projects' => config('portfolio.projects'),
        ];

        $index = [];
        foreach ($groups as $type => $items) {
            foreach ($items as $item) {
                $index[] = [
                    'type' => $type,
                    'title' => $item['title'] ?? '',
                    'excerpt' => $item['excerpt'] ?? $item['summary'] ?? '',
                    'tags' => $item['tags'] ?? [],
                    'url' => $item['url'] ?? '#',
                ];
            }
        }

        return $index;
    }
}
