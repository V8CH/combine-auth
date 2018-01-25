<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

use Faker\Generator as Faker;
use V8CH\LaravelAuthApi\Models\User;

/** @noinspection PhpUndefinedVariableInspection */
$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'name' => "{$faker->firstName} {$faker->lastName}",
        'password' => $password ?: $password = bcrypt(md5(microtime())),
        'remember_token' => str_random(10),
        'role' => 'User',
        'selected_context_id' => null,
        'selected_context_type' => 'Member',
        'status' => 'Onboarded',
    ];
});
