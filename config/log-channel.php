<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Telegram Log Channel
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    |
    */

    'telegram' => [
        'driver' => 'daily',
        'path' => storage_path('logs/telegram.log'),
        'level' => 'debug',
        'days' => 30,
    ],

];
