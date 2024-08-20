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
        Schema::create('natureza_ops', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('token_company');
            $table->uuid('emitente')->nullable();
            $table->string('titulo_interno'); 
            $table->string('natureza_da_operacao');
            $table->string('tipo')->nullable();
            $table->integer('finNfe')->nullable();
            $table->string('indPres')->nullable();
            $table->string('devolução')->nullable();
            $table->integer('padrão')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('natureza_ops');
    }
};
