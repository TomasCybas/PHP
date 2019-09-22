<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Owner;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    $owner_ids = Owner::pluck('id');
    return [
        'reg_number' => $faker->lexify('???').$faker->randomNumber('3', true),
        'brand' => $faker->word,
        'model' => $faker->word,
        'owner_id' => $owner_ids->random(),
        'from_date' => $faker->date('Y-m-d'),
        'to_date' => $faker->date('Y-m-d'),

    ];
});
