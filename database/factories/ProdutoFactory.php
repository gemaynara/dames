<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'categoria_id'=> rand(1,10),
        'marca_id'=> rand(1,10),
        'nome'=> $faker->text(20),
        'descricao'=> $faker->sentence(20),
        'detalhes'=>  $faker->sentence(30),
        'valor' => $faker->numerify('####'),
        'estoque'=> $faker->randomNumber(3),
        'valor_desconto'=> $faker->numerify('####'),
        'qnt_vendida'=>$faker->randomNumber(5),
        'slug'=> $faker->slug
    ];
});
