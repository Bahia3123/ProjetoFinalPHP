<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('cidades', function (Blueprint $table) { // Alterado para 'cidades'
        $table->id(); // Cria uma coluna de chave primária
        $table->string('name'); // Nome da cidade
        $table->string('ddd'); // Código DDD
        $table->timestamps(); // Colunas created_at e updated_at
    });
}

public function down()
{
    Schema::dropIfExists('cidades'); // Alterado para 'cidades'
}

};
