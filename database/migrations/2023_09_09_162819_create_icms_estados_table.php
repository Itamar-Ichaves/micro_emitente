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
        Schema::create('icms_estados', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('uf_origem', 10);
            $table->string('uf_destino',10);
            $table->decimal('aliquota_origem',10,2);
            $table->decimal('aliquota_destino',10,2);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icms_estados');
    }
};
