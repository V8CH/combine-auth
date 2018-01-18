<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

use Faker\Generator as Faker;
use V8CH\Combine\Auth\Models\Role;
use V8CH\Combine\Member\Models\Member;

/** @noinspection PhpUndefinedVariableInspection */
$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->words(1, true),
        'type' => Member::class,
    ];
});
