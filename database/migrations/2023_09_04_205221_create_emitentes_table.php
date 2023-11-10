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
        Schema::create('emitentes', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('token_company');
            $table->string('certificado_digital_uuid');
            $table->string('time_zone')->default('America/Sao_Paulo');
            $table->string('logo')->nullable();
            $table->string('razao_social', 120)->default('*');
            $table->string('fantasia');
            $table->string('cnpj', 20)->default('00.000.000/0000-00');
            $table->string('ie', 15)->default('00000000000');

            $table->string('municipio');
            $table->string('uf');

            $table->string('logradouro', 60)->default('*');
            $table->string('numero', 10)->default('*');
            $table->string('bairro', 30)->default('*');
            $table->string('cep', 10)->default('00000-000');
            $table->string('email', 100);
            $table->string('telefone', 14)->default('00 00000-0000');
            $table->string('complemento')->default('*');

            $table->integer('tributacao_uuid');

          
            
           


            // alter table business add column aut_xml varchar(18) default '';
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emitentes');
    }
};
