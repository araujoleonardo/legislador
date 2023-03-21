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
            $table->string('name');
            $table->enum('sexo', ['Masculino', 'Feminino', 'Outro']);
            $table->date('dataNascimento')->nullable();
            $table->string('nomeMae')->nullable();
            $table->string('nomePai')->nullable();
            $table->enum('estadoCivil', ['Casado', 'Solteiro', 'Viúvo', 'Divorciado', 'Outro']);
            $table->string('profissao')->nullable();
            $table->string('tituloEleitor')->nullable();
            $table->string('zonaEleitoral')->nullable();
            $table->string('secaoEleitoral')->nullable();
            $table->string('RG')->nullable();
            $table->string('CPF')->nullable();
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('regiao')->nullable();
            $table->string('tempoResidencia')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
