<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Identity
    |--------------------------------------------------------------------------
    */

    'name' => 'JohnRobert Pacamo',
    'site_name' => 'JohnRobert Pacamo',
    'given_name' => 'JohnRobert',
    'family_name' => 'Pacamo',
    'pronouns' => 'he/him',
    'status_icon' => '💻',
    'role' => '4th-Year IT Student & OJT Library Intern',
    'affiliation' => [
        'name' => 'Data Center College of the Philippines, Bangued',
        'url' => 'https://dccp.edu.ph/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Biography
    |--------------------------------------------------------------------------
    */

    'bio' => [
        "JohnRobert Pacamo is a fourth-year IT student at Data Center College of the Philippines, Bangued, currently serving as an OJT library intern where he applies his technical skills to support day-to-day operations. His academic journey includes a Bachelor of Science in Information Technology (2023–Present) and completion of Senior High School at Abra High School Main Campus (2021–2023). He holds a certification in Online Safety Through Netiquette, reflecting his commitment to responsible and secure use of digital technologies. Passionate about technology and continuous learning, JohnRobert is open to opportunities that allow him to grow professionally and contribute meaningfully to IT and information management roles.",
    ],

    'avatar' => 'img/pacamo.jpg',
    'resume' => 'uploads/resume.pdf',

    'interests' => [
        'Information Technology',
        'Information Management',
        'Online Safety & Netiquette',
        'Continuous Learning',
    ],

    'education' => [
        [
            'degree' => 'BS Information Technology',
            'institution' => 'Data Center College of the Philippines, Bangued',
            'start' => '2023',
            'end' => null,
        ],
        [
            'degree' => 'Senior High School',
            'institution' => 'Abra High School Main Campus',
            'start' => '2021',
            'end' => '2023',
        ],
    ],

    'social' => [
        ['icon' => 'fa-solid fa-envelope', 'label' => 'E-mail Me', 'url' => 'mailto:pacamorobert@gmail.com'],
        ['icon' => 'fa-brands fa-github', 'label' => 'GitHub', 'url' => 'https://github.com/pacamorobert'],
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
            'role' => 'OJT Library Intern',
            'org' => 'Data Center College of the Philippines, Bangued',
            'start' => '2025',
            'end' => null,
            'summary' => 'Applying technical skills to support library operations, information management, and day-to-day services as part of on-the-job training.',
        ],
    ],

    'skills' => [
        [
            'name' => 'Technical Skills',
            'items' => [
                ['label' => 'Information Technology', 'level' => 4],
                ['label' => 'Computer Literacy', 'level' => 5],
                ['label' => 'Information Management', 'level' => 4],
            ],
        ],
        [
            'name' => 'Professional Skills',
            'items' => [
                ['label' => 'Online Safety & Netiquette', 'level' => 5],
                ['label' => 'Communication', 'level' => 4],
                ['label' => 'Teamwork', 'level' => 4],
            ],
        ],
    ],

    'languages' => [
        ['name' => 'English', 'level' => 4, 'label' => 'Advanced'],
        ['name' => 'Filipino', 'level' => 5, 'label' => 'Native'],
    ],

    'awards' => [
        [
            'title' => 'Online Safety Through Netiquette',
            'awarder' => 'Online Certification',
            'date' => '',
            'summary' => 'Certification demonstrating responsible and secure use of digital technologies and proper online etiquette.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    */

    'projects' => [],

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