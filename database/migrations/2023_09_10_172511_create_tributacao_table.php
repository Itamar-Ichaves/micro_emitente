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
        Schema::create('tributacao', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('token_company');
            $table->bigInteger('natureza_da_operacao_id')->unsigned();
            $table->foreign('natureza_da_operacao_id')->references('id')->on('natureza_da_operacao');
            
            $table->string('descricao', 90);
            $table->string('cfop', 10);
            $table->string('cfop_fora', 10);
            $table->string('cfop_fora_consumidor_final', 10);
            $table->string('cfop_exportacao', 10);
            $table->string('padrao', 1)->default();

            //ipi
            $table->string('cestIPI', 20);
            $table->string('clEnq', 150);
            $table->string('CNPJProd', 25);
            $table->string('cSelo', 25);
            $table->string('qSelo', 25);
            $table->string('cEnq', 25);
            $table->integer('tipo_calc_ipi');
            $table->string('pIPI', 15,2);
            $table->string('vUnidIPI', 15,2);
            $table->string('qUnidIPI', 15,2);

            //PIS
            $table->string('cstPIS', 10);
            $table->integer('tipo_calc_pis');
            $table->decimal('pPis', 10,2);
            $table->decimal('vAliqPro_pis', 10,2);
            $table->integer('tipo_calc_pisst');
            $table->decimal('pPISST', 10,2);
            $table->decimal('vAliqProd_pisst', 10,2);

            //Confins
            $table->string('cstCOFINS', 10);
            $table->integer('tipo_calc_cofins');
            $table->decimal('pCOFINS', 10,2);
            $table->decimal('vAliqPro_cofins', 10,2);
            $table->integer('tipo_calc_cofinsst');
            $table->decimal('pCOFINSST', 10,2);
            $table->decimal('vAliqProd_cofinsst', 10,2);

            //ICMS
            $table->string('cstICMS', 20);
            $table->integer('modBC');
            $table->decimal('vBCICMS', 10,2);
            $table->decimal('pICMS', 15,2);
            $table->integer('modBCST');
            $table->decimal('pMVAST', 15,2);
            $table->decimal('pRedBCST', 15,2);
            $table->decimal('preco_unit_Pauta_ST', 15,2);
            $table->decimal('pRedBC', 15,2);
            $table->decimal('pICMSST', 15,2);
            $table->decimal('motDesICMS', 15,2);
            $table->decimal('pBCOp', 15,2);
            $table->decimal('UFST', 15,2);
            $table->decimal('pCredSN', 15,2);
            $table->decimal('pFCP', 15,2);
            $table->decimal('vICMSSubstituto', 15,2);
            $table->decimal('pFCPST', 15,2);
            $table->decimal('pFCPSTRet', 15,2);
            $table->decimal('pDif', 15,2);

            // nf-e

            $table->integer('ultimo_numero_nfe')->default(0);
            $table->integer('ultimo_numero_nfce')->default(0);
            $table->integer('ultimo_numero_cte')->default(0);
            $table->integer('ultimo_numero_mdfe')->default(0);
            $table->string('inscricao_municipal', 15)->default("");

            $table->integer('numero_serie_nfe')->default(1);
            $table->integer('numero_serie_nfce')->default(1);
            $table->integer('ambiente')->default(2);
            $table->integer('regime')->default(1);

            $table->string('csc', 70)->default('');
            $table->string('csc_id', 10)->default('');

            $table->string('aut_xml', 18)->default('');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tributacao');
    }
};
