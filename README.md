# Laravel Auth API

An API implemention of Laravel's built-in authentication architecture.


## Installation

Via Composer:

```php
composer require v8ch/combine-shared
```

Then, update the parent application's `auth` config key in `config\auth.php`.

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

## License

Laravel Auth API is open-sourced software copyright by [Robert Pratt](mailto:bpong@v8ch.com) and licensed under the [GPLv3 license](https://opensource.org/licenses/GPL-3.0).

