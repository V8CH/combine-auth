<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

use Faker\Generator as Faker;
use V8CH\Combine\Auth\Models\Ability;
use V8CH\Combine\Auth\Models\Role;

/** @noinspection PhpUndefinedVariableInspection */
$factory->define(Ability::class, function (Faker $faker) {
    return [
        'actions' => $faker->words(2),
        'role_id' => function () {
            return factory(Role::class)->create()->id;
        },
    ];
});
