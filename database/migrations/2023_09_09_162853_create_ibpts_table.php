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
        Schema::create('ibpts', function (Blueprint $table) {
            $table->id();
            $table->string('ncm',15);
            $table->string('uf',2);
            $table->integer('ex');
            $table->string('description');
            $table->decimal('nacionalfederal',10,2);
            $table->decimal('importadosfederal',10,2);
            $table->decimal('estadual',10,2);
            $table->decimal('municipal',10,2);
            $table->date('vigenciainicio');
            $table->date('vigenciafinal');
            $table->string('chave',15);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibpts');
    }
};
