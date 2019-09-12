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

$factory->define(App\User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' =>         Hash::make('secret')
        , // secret
        'remember_token' => str_random(10),        
        'prenom' => $faker->firstName,
        'genre' => $gender,
        'entreprise' => $faker->company,
        'telephone' => $faker->phoneNumber,
        'avatar' => $faker->name,
    ];
});
