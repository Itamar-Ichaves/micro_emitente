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
        Schema::create('tributacao_iva', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('token_company');
            $table->uuid('natureza_da_operacao_id')->unsigned();
            $table->uuid('tributacao_id')->unsigned();
            $table->string('cstIcms',15);
            $table->string('uf_origem',10);
            $table->string('uf_destino',10);
            $table->decimal('pIcmsIntra',10,2);
            $table->decimal('pIcmsInterestadual',20,2);
            $table->decimal('pWAST',10);
            $table->decimal('pMVAST',10,2);
            $table->decimal('pRedBCST',10,2);
            $table->decimal('pWASTImportado',10,2);
            $table->decimal('pFCPST',10,2);
            $table->decimal('pDifal',10,2);
            $table->decimal('pFCPSTet',10,2);
            $table->integer('mobBCST');


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tributacao_ivas');
    }
};
