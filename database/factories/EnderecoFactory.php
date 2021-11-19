<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Endereco;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    return [
        "user_id"=> $faker->unique()->numberBetween(1,50),
        "cep"=> $faker->postcode,
        "endereco"=> $faker->streetName,
        "numero" =>rand(1,985),
        "complemento"=> $faker->text(10),
        "bairro"=> $faker->sentence(2),
        "cidade"=>$faker->city,
        "estado"=> $faker->countryCode,
        "tipo_endereco"=> $faker->randomElement(['COMERCIAL', 'RESIDENCIAL']),
    ];
});
