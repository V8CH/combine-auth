<?php

use V8CH\Combine\Auth\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    |
    | Set authentication overrides.
    |
    */

    'auth' => [
        'guards' => [
            'web' => [
                'driver' => 'session',
                'provider' => 'users',
            ],
            'api' => [
                'driver' => 'passport',
                'provider' => 'users',
            ],
        ],
        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => User::class,
            ],
        ],
    ],

];
