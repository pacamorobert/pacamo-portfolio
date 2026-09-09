<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Identity
    |--------------------------------------------------------------------------
    */

    'name' => 'Dr. Alex Johnson',
    'site_name' => 'Your Name',
    'given_name' => 'Alex',
    'family_name' => 'Johnson',
    'pronouns' => 'he/him',
    'status_icon' => '☕️',
    'role' => 'Senior AI Research Scientist',
    'affiliation' => [
        'name' => 'Meta AI',
        'url' => 'https://ai.meta.com/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Biography
    |--------------------------------------------------------------------------
    */

    'bio' => [
        "Alex Johnson is a Senior AI Research Scientist at Meta AI. His research has been published in top conferences like NeurIPS and ICML, with over 10,000 citations. Alex is passionate about pushing the boundaries of AI while ensuring ethical development.",
        'I blog about machine learning, deep learning, and moonshots. Please reach out to collaborate 😃',
    ],

    'avatar' => 'media/avatars/me.png',
    'resume' => 'uploads/resume.pdf',

    'interests' => [
        'Large Language Models',
        'Computer Vision',
        'Reinforcement Learning',
        'AI Ethics',
    ],

    'education' => [
        [
            'degree' => 'PhD Computer Science',
            'institution' => 'Stanford University',
            'start' => '2015',
            'end' => '2019',
        ],
        [
            'degree' => 'MS Computer Science',
            'institution' => 'Carnegie Mellon University',
            'start' => '2013',
            'end' => '2015',
        ],
        [
            'degree' => 'BS Computer Science',
            'institution' => 'MIT',
            'start' => '2009',
            'end' => '2013',
        ],
    ],

    'social' => [
        ['icon' => 'fa-solid fa-envelope', 'label' => 'E-mail Me', 'url' => 'mailto:alex.johnson@example.com'],
        ['icon' => 'fa-brands fa-x-twitter', 'label' => 'X', 'url' => 'https://x.com/example'],
        ['icon' => 'fa-brands fa-github', 'label' => 'GitHub', 'url' => 'https://github.com/example'],
        ['icon' => 'fa-brands fa-linkedin-in', 'label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/example/'],
        ['icon' => 'ai ai-google-scholar', 'label' => 'Google Scholar', 'url' => 'https://scholar.google.com/citations?user=example'],
        ['icon' => 'ai ai-orcid', 'label' => 'ORCID', 'url' => 'https://orcid.org/0000-0002-1825-0097'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Research section
    |--------------------------------------------------------------------------
    */

    'research' => [
        "Use this area to speak to your mission. I'm a research scientist in the Moonshot team at DeepMind. I blog about machine learning, deep learning, and moonshots.",
        'I apply a range of qualitative and quantitative methods to comprehensively investigate the role of science and technology in the economy.',
        'Please reach out to collaborate 😃',
    ],

    /*
    |--------------------------------------------------------------------------
    | Publications
    |--------------------------------------------------------------------------
    */

    'featured_publications' => [
        [
            'title' => 'An example preprint / working paper',
            'year' => 2019,
            'authors' => ['Dr. Alex Johnson'],
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere tellus ac convallis placerat.',
            'tags' => ['Large Language Models'],
            'url' => '#',
            'featured' => true,
            'links' => [
                ['label' => 'Preprint', 'icon' => 'fa-solid fa-file-lines', 'url' => 'https://arxiv.org/abs/1512.04133v1'],
                ['label' => 'Code', 'icon' => 'fa-solid fa-code', 'url' => 'https://github.com/HugoBlox/kit'],
                ['label' => 'Slides', 'icon' => 'fa-solid fa-chalkboard', 'url' => 'https://www.slideshare.net/'],
            ],
        ],
        [
            'title' => 'An example conference paper',
            'year' => 2013,
            'authors' => ['Dr. Alex Johnson', 'Robert Ford'],
            'excerpt' => 'Proin tincidunt magna sed ex sollicitudin condimentum. Sed ac faucibus dolor, scelerisque sollicitudin nisi.',
            'tags' => ['Large Language Models'],
            'url' => '#',
            'featured' => true,
        ],
    ],

    'recent_publications' => [
        [
            'title' => 'An example preprint / working paper',
            'year' => 2019,
            'authors' => ['Dr. Alex Johnson'],
            'journal' => null,
            'volume' => '(1)',
            'url' => '#',
            'links' => [
                ['label' => 'Preprint', 'icon' => 'fa-solid fa-file-lines', 'url' => 'https://arxiv.org/abs/1512.04133v1'],
                ['label' => 'Code', 'icon' => 'fa-solid fa-code', 'url' => 'https://github.com/HugoBlox/kit'],
                ['label' => 'Slides', 'icon' => 'fa-solid fa-chalkboard', 'url' => 'https://www.slideshare.net/'],
                ['label' => 'Dataset', 'icon' => 'fa-solid fa-database', 'url' => '#'],
                ['label' => 'Poster', 'icon' => 'fa-solid fa-image', 'url' => '#'],
            ],
        ],
        [
            'title' => 'An example journal article',
            'year' => 2015,
            'authors' => ['Dr. Alex Johnson', 'Robert Ford'],
            'journal' => 'Journal of Source Themes',
            'volume' => '1 (1)',
            'url' => '#',
            'note' => true,
        ],
        [
            'title' => 'An example conference paper',
            'year' => 2013,
            'authors' => ['Dr. Alex Johnson', 'Robert Ford'],
            'journal' => 'Proceedings of the HugoBlox Kit Conference',
            'volume' => null,
            'url' => '#',
            'links' => [
                ['label' => 'PDF', 'icon' => 'fa-solid fa-file-pdf', 'url' => '#'],
                ['label' => 'Code', 'icon' => 'fa-solid fa-code', 'url' => '#'],
                ['label' => 'Cite', 'icon' => 'fa-solid fa-quote-left', 'url' => '#', 'cite' => true],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Talks
    |--------------------------------------------------------------------------
    */

    'talks' => [
        [
            'title' => 'Create Beautiful Presentations with Markdown',
            'summary' => 'Discover how to create stunning, interactive presentations using simple Markdown.',
            'date' => '2030-06-01',
            'start' => '1:00 PM',
            'end' => '3:00 PM',
            'location' => 'Online & In-Person',
            'tags' => ['Presentations', 'Open Science'],
            'url' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | News
    |--------------------------------------------------------------------------
    */

    'news' => [
        [
            'title' => '🎉 Easily create your own simple yet highly customizable blog',
            'excerpt' => 'Take full control of your personal brand and privacy by migrating away from the big tech platforms!',
            'date' => '2024-07-15',
            'author' => 'Dr. Alex Johnson',
            'tag' => 'Academic',
            'trending' => true,
            'url' => '#',
        ],
        [
            'title' => 'Over 200,000 installs of Hugo Blox kit since its inception',
            'excerpt' => 'Infrastructure update in Kit proving the tags system.',
            'date' => '2021-08-20',
            'author' => 'Dr. Alex Johnson',
            'tag' => 'Academic',
            'url' => '#',
        ],
        [
            'title' => 'Notebook-style post with Jupyter cells',
            'excerpt' => 'This blog post is a self-contained Jupyter notebook that can be run anywhere.',
            'date' => '2020-10-01',
            'author' => 'Dr. Alex Johnson',
            'tag' => 'Academic',
            'url' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Experience
    |--------------------------------------------------------------------------
    */

    'experience' => [
        [
            'role' => 'Senior AI Research Scientist',
            'org' => 'Meta AI',
            'start' => '2020-01',
            'end' => null,
            'summary' => 'Leading research on multimodal AI systems. Contributed to Llama 2 and other open-source models.',
        ],
        [
            'role' => 'AI Research Intern',
            'org' => 'OpenAI',
            'start' => '2019-06',
            'end' => '2019-12',
            'summary' => 'Worked on GPT-3 scaling. Co-authored paper on prompt engineering.',
        ],
    ],

    'skills' => [
        [
            'name' => 'Technical Skills',
            'items' => [
                ['label' => 'Python', 'level' => 5],
                ['label' => 'Machine Learning', 'level' => 5],
                ['label' => 'Cloud Computing', 'level' => 4],
            ],
        ],
        [
            'name' => 'Research & Communication',
            'items' => [
                ['label' => 'Academic Writing', 'level' => 5],
                ['label' => 'Conference Presentations', 'level' => 4],
                ['label' => 'Grant Proposals', 'level' => 4],
            ],
        ],
    ],

    'languages' => [
        ['name' => 'English', 'level' => 5, 'label' => 'Native'],
        ['name' => 'Spanish', 'level' => 4, 'label' => 'Fluent'],
    ],

    'awards' => [
        [
            'title' => 'Best Paper Award',
            'awarder' => 'NeurIPS',
            'date' => '2022',
            'summary' => 'Awarded for groundbreaking work on efficient training of large models.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    */

    'projects' => [
        [
            'title' => 'Pandas',
            'summary' => 'Flexible and powerful data analysis / manipulation library for Python, providing labeled data structures.',
            'tags' => ['Data Science'],
            'date' => '2019-07-01',
            'url' => '#',
        ],
        [
            'title' => 'PyTorch',
            'summary' => 'Open source machine learning framework that accelerates the path from research prototyping to production deployment.',
            'tags' => ['Machine Learning'],
            'date' => '2019-07-01',
            'url' => '#',
        ],
        [
            'title' => 'scikit-learn',
            'summary' => 'Machine learning in Python: simple and efficient tools for predictive data analysis in Python.',
            'tags' => ['Machine Learning'],
            'date' => '2019-07-01',
            'url' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Courses
    |--------------------------------------------------------------------------
    */

    'courses' => [
        [
            'title' => 'Hugo Blox Builder for Research',
            'summary' => 'Everything you need to create a personal or shared website using Hugo Blox.',
            'tag' => 'Web Development',
            'url' => '#',
        ],
    ],

    'footer' => [
        'notice' => '© {year} {name}. This work is licensed under',
        'license' => 'CC BY NC ND 4.0',
        'license_url' => 'https://creativecommons.org/licenses/by-nc-nd/4.0',
        'credit' => 'Made with Laravel & Tailwind CSS.',
    ],
];