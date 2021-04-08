<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Flash messages
    |--------------------------------------------------------------------------
    |
    | Here you may configure if to use the laracasts/flash package for flash
    | notifications when a users timezone is set.
    | options [off, laravel, laracasts, mercuryseries, spatie, mckenziearts]
    |
    */

    'flash' => 'laravel',

    'timezone_check' => [
        /*
        |--------------------------------------------------------------------------
        | Timezone Check Events
        |--------------------------------------------------------------------------
        |
        | Here you may configure which events will be listen for user timezone check.
        | If null specified, default Laravel Login and AccessTokenCreated events will be listen.
        | This option is useful only if custom event handler for custom events specified.
        | Examples:
        | 1) null
        | 2) \App\Events\MyLoginEvent::class
        | 3) [
        |         \App\Events\MyLoginEvent1::class,
        |         \App\Events\MyLoginEvent2::class,
        |    ]
        |
        */

        'events' => null,

        /*
        |--------------------------------------------------------------------------
        | Timezone Check Event Listener
        |--------------------------------------------------------------------------
        |
        | Here you may configure which event handler will be used for user timezone check.
        | If null specified, package default event listener will be used.
        | This option is useful only if you are using custom login events or want to
        | override default event listener, e.g. RetrievesGeoIpTimezone trait.
        | Examples:
        | null
        | \App\EventListeners\MyTimezoneCheckEventListener::class
        |
        */

        'listener' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Overwrite Existing Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may configure if you would like to overwrite existing
    | timezones if they have been already set in the database.
    | options [true, false]
    |
    */

    'overwrite' => true,

    /*
    |--------------------------------------------------------------------------
    | Overwrite Default Format
    |--------------------------------------------------------------------------
    |
    | Here you may configure if you would like to overwrite the
    | default format.
    |
    */

    'format' => 'jS F Y g:i:a',

    /*
    |--------------------------------------------------------------------------
    | Empty Date 
    |--------------------------------------------------------------------------
    |
    | Here you may configure string to show when date is null.
    | If null specified, string 'Empty' will be used.
    |
    */

    'empty_date' => null,

    /*
    |--------------------------------------------------------------------------
    | Lookup Array
    |--------------------------------------------------------------------------
    |
    | Here you may configure the lookup array whom it will be used to fetch 
    | the user remote address.
    | When a key is found inside the lookup array that key it will be used.
    |
    */

    'lookup' => [
        'server' => [
            'REMOTE_ADDR',
        ],
        'headers' => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Lookup Array
    |--------------------------------------------------------------------------
    |
    | Here you may configure flash messages for timezone setup results.
    | If null specified, no message will be flashed for current case.
    |
    */

    'messages' => [
        'fail' => [
            'key' => 'error',
            'message' => 'We cannot determine your timezone',
        ],

        'default' => [
            'key' => 'warning',
            'message' => 'We cannot determine your timezone and have set it to default: %s',
        ],

        'success' => [
            'key' => 'info',
            'message' => 'We have set your timezone to %s',
        ],
    ],
];
