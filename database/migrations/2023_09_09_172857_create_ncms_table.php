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
        Schema::create('ncm', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('token_company')->nullable();
            $table->string('cod_ncm');
            $table->string('nome_ncm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ncms');
    }
};
