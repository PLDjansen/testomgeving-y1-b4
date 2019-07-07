<?php

return [

    /*
     * Application title to display in <title> tag
     */
    'title' => 'CoreUI Laravel Theme by HZ-HBO-ICT',

    /*
     * Text to put in the top-left of the menu bar. logo_mini is shown when the navbar is collapsed.
     * NOTE: This is a non-escaped string, so you can put HTML in here
     */
    'logo' => 'Forti<strong>STATS</strong>',
    'logo_mini' => 'FS',

    /*
     * Menu builder
     */
    'menu' => [
        [
            'text' => 'Homepagina',          // The text to be displayed inside the menu.

            'url' => '/',                 // The URL behind the text. Mutually exclusive with "route" option.
            'icon' => 'home',           // Name of FontAwesome icon to display.
            'target' => '',            // Target attribute of <a> tag.

        ],
        [
            'text' => 'Wedstrijden',
            'url' => 'matches',
            'icon' => 'futbol',
            'target' => '',
        ],
        [

            'text' => 'Seizoenen',
            'url' => 'seasons',
            'icon' => 'futbol',
            'target' => '',
        ],
        [

            'text' => 'Spelersselectie',
            'url' => 'players',
            'icon' => 'users',
            'target' => '',
        ],
        [

            'text' => 'Help',
//            'url' => 'admin/dashboard',
            'url' => '/',
            'icon' => 'question',
//            'target' => '_blank',
            'target' => '',
        ],
        [
            'text' => 'Gebruiker',
            'url' => 'users',
            'icon' => 'users',
            'target' => '',
        ],
        [
            'text' => 'Uitloggen',
//            'url' => 'login',
            'url' => '/',
            'icon' => 'sign-out-alt',
            'target' => '',
        ],
//        'First section',                    // Section header
//        [
//            'text' => 'Users',
//            'route' => '/',       // The route behind the text. Mutually exclusive with "url" option.
//            'icon' => 'users'
//        ],
//        'Admin only',
//        [
//            'can' => 'edit-settings',       // Use Laravel's Gate functionality via the 'can' keyword to show menu items to specific user (roles)
//            'text' => 'Settings',
//            'icon' => 'cog',
//            'submenu' => [
//                [
//                    'text' => 'Level one',
//                    'icon' => 'bell',       // Tip: always set icons. Submenus in particular tend to get misaligned plus it's more accessible and user friendly.
//                    'url' => 'admin/settings/level-one'
//                ],
//                [
//                    'text' => 'Level two',
//                    'icon' => 'clock',
//                    'submenu' => [
//                        [
//                            'text' => 'Add as many as you like',
//                            'url' => '#'
//                        ]
//                    ]
//                ]
//            ]
//        ]
    ],

    /**
     * Filters that parse above menu configuration and add some sparkling things, like .active classes on active
     * menu items and parsing routes and URLs into the correct href attributes.
     */
    'filters' => [
        HzHboIct\LaravelCoreUI\Menu\Filters\HrefFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ActiveFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\SubmenuFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ClassesFilter::class,
    ],
];