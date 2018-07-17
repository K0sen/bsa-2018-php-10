<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Entity\Currency::class, function (Faker $faker, array $attr) {
    return [
        'name' => $faker->unique()->currencyCode,
        'rate' => $attr['rate'] ?? $faker->randomFloat(2, 0.1, 7000),
    ];
});
