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
        Schema::create('icms_desoneracaos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_icms_desoneracao');
            $table->string('desc_icms_desoneracao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icms_desoneracaos');
    }
};
