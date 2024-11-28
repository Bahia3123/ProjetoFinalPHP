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
        Schema::create('estados', function (Blueprint $table) {
            $table->id(); // ID automático (chave primária)
            $table->string('name'); // Nome do estado
            $table->unsignedBigInteger('cidade'); // Relacionamento com a tabela 'cidades'

            // Definindo a chave estrangeira
            $table->foreign('cidade')->references('id')->on('cidades')->onDelete('cascade');

            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('estados');
    }

};

