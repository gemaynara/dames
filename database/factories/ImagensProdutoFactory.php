<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProdutoImagens;
use Faker\Generator as Faker;

$factory->define(ProdutoImagens::class, function (Faker $faker) {
    $distribuidor = $faker->randomElement(\App\User::query()->where('perfil', 'D')->get());
    $data=  [
        'produto_id'=> rand(1,100),
        'distribuidor_id'=> $distribuidor->id,
        'nome_arquivo'=> $faker->text(30),
        'diretorio'=> $faker->image(public_path().'/images/produtos/',500,500, null, false),
        'formato'=> 'image',
        'tamanho'=> $faker->numberBetween(1,100)
    ];
    dd($data);
});
