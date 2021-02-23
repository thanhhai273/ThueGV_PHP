<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        'avatar' => $faker->imageUrl(),
        'description' => $faker->text(20),
        'ranking' => $faker->randomElement(['1', '2', '3', '4', '5']),
    ];
});
