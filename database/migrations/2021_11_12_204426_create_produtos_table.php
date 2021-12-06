<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->integer('distribuidor_id')->nullable();
            $table->string('nome', 50);
            $table->string('codigo', 20)->nullable();
            $table->string('descricao', 300)->nullable();
            $table->string('detalhes', 800)->nullable();
            $table->decimal('valor', 11,2);
            $table->integer('estoque')->default(0);
            $table->decimal('valor_desconto')->default(0.00);
            $table->integer('qnt_vendida')->default(0);
            $table->string('slug',500)->nullable();
            $table->decimal('peso',7,3)->nullable();
            $table->decimal('altura',7,3)->nullable();
            $table->decimal('largura',7,3)->nullable();
            $table->decimal('comprimento',7,3)->nullable();
            $table->tinyInteger('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
