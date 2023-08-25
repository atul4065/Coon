<?php

return [
    'dashboard' => [
        'logo_img' => '',
        'home_title' => 'Coon Admin Panel'
    ],
    'routes' => [
        'home' => [
            'url' => '/admin/dashboard',
            'title' => 'Dashboard',
            'icon' => 'fa-solid fa-chart-line'
        ],
        'courses' => [
            'url' => '#courses',
            'title' => 'Courses',
            'icon' => 'fa-brands fa-discourse'
        ],
        'profesors' => [
            'url' => '#professors',
            'title' => 'Professors',
            'icon' => 'fa-solid fa-chalkboard-user'
        ],
        'candidates' => [
            'url' => '#candidates',
            'title' => 'Candidates',
            'icon' => 'fa-solid fa-user-tie'
        ],
        'admins' => [
            'url' => '#admins',
            'title' => 'Administrators',
            'icon' => 'fa-solid fa-lock'
        ],
        'lectures_durations' => [
            'url' => '#lecture-durations',
            'title' => 'Lecture/Durations',
            'icon' => 'fa-regular fa-clock'
        ],
        'blogs' => [
            'url' => '#blogs',
            'title' => 'Blogs',
            'icon' => 'fa-solid fa-blog'
        ],
        'contact_us' => [
            'url' => '#contact-us',
            'title' => 'Contact Us',
            'icon' => 'fa-solid fa-headset'
        ],
        'careers' => [
            'url' => '#careers',
            'title' => 'Careers',
            'icon' => 'fa-solid fa-briefcase'
        ],
        'subscriptions' => [
            'url' => '#subscriptions',
            'title' => 'Subscriptions',
            'icon' => 'fa-solid fa-bolt'
        ],
        'stories' => [
            'url' => '#stories',
            'title' => 'Stories',
            'icon' => 'fa-solid fa-wind'
        ],
        'testimonials' => [
            'url' => '#testimonials',
            'title' => 'Testimonials',
            'icon' => 'fa-solid fa-sliders'
        ],
        'ds_and_algos' => [
            'url' => '#ds-and-algos',
            'title' => 'Data Structure & Algos',
            'icon' => 'fa-brands fa-algolia'
        ],
        'free_trial_classes' => [
            'url' => '#free-trials',
            'title' => 'Free Trial Classes',
            'icon' => 'fa-brands fa-free-code-camp'
        ],
        'categories' => [
            'url' => '#categories',
            'title' => 'Categories',
            'icon' => 'fa-solid fa-folder-tree'
        ]
    ],
    'features' => [
        'feature_1' => [
            'title' => 'Courses',
            'brief_title' => 'Active Courses For Students',
            'description' => 'Various Courses provides to fullfill the students needs...',
            'url' => '#courses'
        ],
        'feature_2' => [
            'title' => 'Professors',
            'brief_title' => 'Highly Educated Profressors',
            'description' => 'High Qualified, skilled and expertise lectures all over country...',
            'url' => '#professors'
        ],
        'feature_3' => [
            'title' => 'Subscription',
            'brief_title' => 'Enroll the course',
            'description' => 'To Enroll any courses to enhance and improve skills for better placement...',
            'url' => '#subscriptions'
        ],
        'feature_4' => [
            'title' => 'Free Trial Classes',
            'brief_title' => 'Demo Classes',
            'description' => 'To check our education system/professionalism and displine get a free trial',
            'url' => '#free-trial-classes'
        ]
    ]

];
