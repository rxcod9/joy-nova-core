<?php

return [

    /*
     * The config_key for nova-core package.
     */
    'config_key' => env('NOVA_CORE_CONFIG_KEY', 'joy-nova-core'),

    /*
     * The route_prefix for nova-core package.
     */
    'route_prefix' => env('NOVA_CORE_ROUTE_PREFIX', 'joy-nova-core'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify nova controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\NovaCore\\Http\\Controllers',
    ],
];
