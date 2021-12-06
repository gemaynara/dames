<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->foreign('endereco_id')->references('id')->on('enderecos');

            $table->unsignedBigInteger('cupom_id')->nullable();
            $table->foreign('cupom_id')->references('id')->on('cupons');

            $table->string('codigo_carrinho', 50)->nullable();
            $table->string('codigo_pedido', 50)->nullable();
            $table->dateTime('data_compra')->nullable();
            $table->decimal('subtotal', 11, 2)->default(0.00);
            $table->decimal('desconto', 11, 2)->default(0.00);
            $table->decimal('total', 11, 2)->default(0.00);
            $table->string('status')->default('no carrinho');
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
        Schema::dropIfExists('pedidos');
    }
}
