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
            $table->uuid('id');
            $table->uuid('token_company');
            $table->uuid('certificado_digital_uuid')->nullable();
            $table->string('logo')->nullable();
            $table->string('razao_social', 120)->default('*');
            $table->string('fantasia')->nullable();
            $table->string('cnpj', 20)->default('00.000.000/0000-00');
            $table->string('ie', 15)->default('00000000000')->nullable();

            $table->string('municipio');
            $table->string('uf');

            $table->string('logradouro', 60)->default('*')->nullable();
            $table->string('numero', 10)->default('*')->nullable();
            $table->string('bairro', 30)->default('*')->nullable();
            $table->string('cep', 10)->default('00000-000')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telefone', 14)->default('00 00000-0000')->nullable();
            $table->string('complemento')->default('*')->nullable();

            $table->uuid('tributacao_uuid')->nullable();

          
            
           


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
