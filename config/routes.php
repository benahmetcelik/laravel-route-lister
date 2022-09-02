<?php
return [
    /**
     * Layout's to be used on package pages
     */
    'layout' => 'routes::layouts.app',
    /**
     * Middleware that will wrap up seo routes
     */
    'middleware' => 'auth',
    /**
     * Active Theme
     */
    'active_theme'=>'theme1',

    /**
     * Theme Colors Values
     */
    'theme'=>[
        'theme1'=>[
            'back'=>'#000000',
            'text'=>'#ffffff'
        ],
        'theme2'=>[
            'back'=>'#ffffff',
            'text'=>'#000000'
        ],
    ]
];