<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('perfil', 1)->default('U');
            $table->string('telefone', 15)->nullable();
            $table->string('celular', 15)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('cnpj', 18)->nullable();
            $table->tinyInteger('ativo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('perfil');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
            $table->dropColumn('cpf');
            $table->dropColumn('cnpj');
            $table->dropColumn('ativo');
        });
    }
}
