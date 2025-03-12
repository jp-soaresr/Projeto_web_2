<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 100);
            $table->string('email')->unique(); // faz com que seja unico na tabela
            // $table->doble('salario', 8, 2); // sendo que e um numero com 8 casas e 2 apos a virgula
            $table->string('telefone')->nullable(); // pode fazer com que a variavel aceite null 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
