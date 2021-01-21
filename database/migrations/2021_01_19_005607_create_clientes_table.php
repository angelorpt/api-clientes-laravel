<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('cpf', 14);
            $table->string('rg', 15)->nullable();
            $table->string('email', 150);
            $table->string('fone1', 15)->nullable();
            $table->string('fone2', 15)->nullable();
            $table->date('nascimento')->nullable();
            $table->string('sexo', 1)->nullable();
            $table->string('cep', 10);
            $table->string('rua', 200)->nullable();
            $table->string('numero', 15)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade', 120)->nullable();
            $table->string('uf', 2)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
