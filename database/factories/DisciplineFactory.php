<?php

use Faker\Generator as Faker;

$factory->define(App\Discipline::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
