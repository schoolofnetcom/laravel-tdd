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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Account::class, function (Faker\Generator $faker) {
    static $bank_image;

    return [
        'title' => $faker->company,
        'agency' => $faker->randomNumber(3),
        'account_number' => $faker->randomNumber(5),
        'balance' => $faker->randomNumber(4),
        'balance_initial' => $faker->randomNumber(4),
        'bank_id' => $faker->numberBetween(1, 170),
        'bank_image' => $bank_image ?: $bank_image = 'none.jpg',
    ];
});
