<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
        'nome'=> $faker->text(20),
        'descricao'=> $faker->sentence(2),
        'imagem'=> $faker->image(public_path().'/images/categorias',250,250, null, false)
    ];
});
