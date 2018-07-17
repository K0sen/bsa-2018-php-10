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

$factory->define(App\Entity\User::class, function (Faker $faker, array $attr) {
    return [
        'name' => $faker->userName,
        'email' =>  $faker->unique()->safeEmail,
        'is_admin' => $attr['is_admin'],
        'password' => bcrypt('admin'),
        'remember_token' => str_random(10),
    ];
});
