<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TestChild;
use Faker\Generator as Faker;

$factory->define(TestChild::class, function (Faker $faker) {
    return [
        'string' => $faker->randomElement(['lorem', 'ipsum']),
    ];
});
