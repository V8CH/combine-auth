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
                'model' => V8CH\LaravelAuthApi\User::class,
            ],
        ],
    ],
```

Finally, run the migrations:

```php
php artisan migrate
```

This package alters the `users` table to store version 1 UUIDs for the primary key. In addition, it creates columns
for `role`, `selected_context_id`, `selected_context_type` and `status` as prerequisites for an authorization scheme.
Creation of UUIDs is handled by the `CreatesUuids` trait included among dependencies in `v8ch/eloquent-model-traits`.

## License

Laravel Auth API is open-sourced software copyright by [Robert Pratt](mailto:bpong@v8ch.com) and licensed
under the [GPLv3 license](https://opensource.org/licenses/GPL-3.0).

