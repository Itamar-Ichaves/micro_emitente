<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificado_digitals', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('token_company')->nullable();
            $table->uuid('emitente')->nullable();
            $table->string('certificado_nome_arquivo', 60)->nullable();
            $table->binary('arquivo_binario');
            $table->string('senha', 60);

            $table->string('cnpj', 80);
            $table->string('serial', 80)->nullable();
            $table->string('inicio', 80)->nullable();
            $table->string('expiracao', 100)->nullable();
            $table->string('identificado', 150)->nullable();
            $table->string('idctx', 200)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificado_digitals');
    }
};