<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique()->nullable();
            $table->uuid('id_cliente')->unique();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('email');
            $table->integer('cep');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('estado');
            $table->string('senha');
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
        Schema::dropIfExists('users');
    }
}
