<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rating;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'user_id'=> rand(1,50),
        'produto_id'=> rand(1,100),
        'rating' => rand(1,5),
        'comment' =>$faker->paragraph,
    ];
});
