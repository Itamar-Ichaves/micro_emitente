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
        Schema::create('icms', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('token_company')->nullable();
            $table->string('codigo_icms');
            $table->string('desc_icms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icms');
    }
};
