# combine-auth

## Installation

Requires an update to the application `auth` config key in `config\auth.php`.

```php
    'auth' => [
        'guards' => [
...
            'api' => [
                'driver' => 'passport',
                'provider' => 'users',
            ],
...
        ],
        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => V8CH\Combine\Auth\User::class,
            ],
        ],
    ],
```