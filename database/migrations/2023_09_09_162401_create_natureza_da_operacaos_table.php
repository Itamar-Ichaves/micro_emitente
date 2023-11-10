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
        Schema::create('natureza_da_operacao', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('token_company');
            $table->string('titulo_interno');
            $table->string('natureza_da_operacao');
            $table->string('tipo');
            $table->integer('finNfe');
            $table->string('indPres');
            $table->string('devolução');
            $table->integer('padrão');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('natureza_da_operacao');
    }
};
