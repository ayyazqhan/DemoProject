<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->text,
        'price'=>$faker->numberBetween($min = 1500, $max = 6000),
    ];
});
