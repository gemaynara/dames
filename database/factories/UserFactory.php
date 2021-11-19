<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(123456),
        'perfil' => $faker->randomElement(['S', 'D']),
        'telefone' => $faker->phoneNumber,
        'celular' => $faker->phoneNumber,
        'cpf' => "123.456.789-00",
        'cnpj' => "12.345.678/0001-00",
    ];
});
