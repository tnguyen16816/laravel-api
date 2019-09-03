<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default API Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the web api connections below you wish
    | to use as your default connection for all web api work. Of course
    | you may use many connections at once using the web api service.
    |
    */

    'default' => env('API_CONNECTION', 'api-name'),

    /*
    |--------------------------------------------------------------------------
    | API Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the web api connections setup for your application.
    | There are some basic examples of different api types to help you
    | get started, but you likely will not be needing all of them.
    |
    */

    'connections' => [

        'api-name' => [
            'host' => env('API_HOST'),
            'username' => env('API_USERNAME'),
            'password' => env('API_PASSWORD'),
            'options' => [
                'json' => true,
                'expects_json' => true
            ]
        ]

    ]

];