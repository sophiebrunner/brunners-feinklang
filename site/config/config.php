<?php

return [
    'home' => 'startseite',
    'locale' => 'de_DE.UTF-8',
    // Only in dev environment
    'debug' => true,
    'cache' => [
        'pages' => [
            'active' => false
        ]
    ],
    'date'  => [
        'handler' => 'strftime'
    ],
    'panel' => [
        'vue' => [
            'compiler' => false
        ]
    ],
    'media' => [
        'url' => 'media', // Medien sollten aus dem 'public/media' Verzeichnis serviert werden
    ],
];
