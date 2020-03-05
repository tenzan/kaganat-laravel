<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'name' => $faker->sentence,
        'phone' => $faker->phoneNumber,
        'address' => $faker->sentence,
        'wifi' => $faker->boolean,
        'desc' => $faker->paragraph
    ];
});
