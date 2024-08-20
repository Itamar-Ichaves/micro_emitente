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
            $table->uuid('id');
            $table->uuid('token_company');
            $table->uuid('natureza_da_operacao_id')->nullable();
           
            $table->string('descricao', 90)->nullable();
            $table->string('cfop', 10);
            $table->string('cfop_fora', 10);
            $table->string('cfop_fora_consumidor_final', 10)->nullable();
            $table->string('cfop_exportacao', 10)->nullable();
            $table->string('padrao', 1)->default();

            //ipi
            $table->string('cestIPI', 20)->nullable();
            $table->string('clEnq', 150)->nullable();
            $table->string('CNPJProd', 25)->nullable();
            $table->string('cSelo', 25)->nullable();
            $table->string('qSelo', 25)->nullable();
            $table->string('cEnq', 25)->nullable();
            $table->integer('tipo_calc_ipi')->nullable();
            $table->string('pIPI', 15,2)->nullable();
            $table->string('vUnidIPI', 15,2)->nullable();
            $table->string('qUnidIPI', 15,2)->nullable();

            //PIS
            $table->string('cstPIS', 10)->nullable();
            $table->integer('tipo_calc_pis')->nullable();
            $table->decimal('pPis', 10,2)->nullable();
            $table->decimal('vAliqPro_pis', 10,2)->nullable();
            $table->integer('tipo_calc_pisst')->nullable();
            $table->decimal('pPISST', 10,2)->nullable();
            $table->decimal('vAliqProd_pisst', 10,2)->nullable();

            //Confins
            $table->string('cstCOFINS', 10)->nullable();
            $table->integer('tipo_calc_cofins')->nullable();
            $table->decimal('pCOFINS', 10,2)->nullable();
            $table->decimal('vAliqPro_cofins', 10,2)->nullable();
            $table->integer('tipo_calc_cofinsst')->nullable();
            $table->decimal('pCOFINSST', 10,2)->nullable();
            $table->decimal('vAliqProd_cofinsst', 10,2)->nullable();

            //ICMS
            $table->string('cstICMS', 20)->nullable();
            $table->integer('modBC')->nullable();
            $table->decimal('vBCICMS', 10,2)->nullable();
            $table->decimal('pICMS', 15,2)->nullable();
            $table->integer('modBCST')->nullable();
            $table->decimal('pMVAST', 15,2)->nullable();
            $table->decimal('pRedBCST', 15,2)->nullable();
            $table->decimal('preco_unit_Pauta_ST', 15,2)->nullable();
            $table->decimal('pRedBC', 15,2)->nullable();
            $table->decimal('pICMSST', 15,2)->nullable();
            $table->decimal('motDesICMS', 15,2)->nullable();
            $table->decimal('pBCOp', 15,2)->nullable();
            $table->decimal('UFST', 15,2)->nullable();
            $table->decimal('pCredSN', 15,2)->nullable();
            $table->decimal('pFCP', 15,2)->nullable();
            $table->decimal('vICMSSubstituto', 15,2)->nullable();
            $table->decimal('pFCPST', 15,2)->nullable();
            $table->decimal('pFCPSTRet', 15,2)->nullable();
            $table->decimal('pDif', 15,2)->nullable();

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
