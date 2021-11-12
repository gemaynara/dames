<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cupom', 10);
            $table->decimal('valor_desconto', 11,2)->default(0.00);
            $table->integer('porcentagem_desconto')->default(0);
            $table->integer('numero_utilizacoes')->default(0);
            $table->dateTime('data_inicial')->nullable();
            $table->dateTime('data_final')->nullable();
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
        Schema::dropIfExists('cupons');
    }
}
