<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
         'name' => $faker->name,
        'email' => $faker->email,
        'password' =>('12345'),
         'role' => 'Admin',
    ];
});
