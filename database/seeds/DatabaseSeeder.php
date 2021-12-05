<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EstadosSeeder::class);

        factory(\App\User::class, 50)->create();
        factory(\App\Endereco::class, 50)->create();
        factory(\App\Marca::class, 50)->create();
        factory(\App\Categoria::class, 50)->create();
        factory(\App\Produto::class, 100)->create();
        factory(\App\ProdutoImagens::class, 200)->create();
        factory(\App\Rating::class, 300)->create();
    }
}
