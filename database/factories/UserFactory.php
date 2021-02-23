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

$factory->define(App\UserModel::class, function (Faker\Generator $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    $is = true;
    return [
        'name' => $faker->name($gender),
        'email' => $faker->safeEmail,
        'password' => bcrypt('secret'),
        'address' => $faker->address,
        'age' => $faker->numberBetween(18, 60),
        'gender' => $gender,
        'isEmployee' => $is,
        'remember_token' => Illuminate\Support\Str::random(10),
    ];
});
