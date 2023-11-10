<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emitente extends Model
{
    use HasFactory;

    protected $fillable = [
            'uuid',
            'token_company',
            'logo',
            'razao_social',
            'fantasia',
            'cnpj',
            'ie',
            'certificado',

            'municipio',
            'uf',

            'logradouro',  
            'numero',  
            'bairro', 
            'cep',  
            'telefone', 
            'complemento', 

            'ultimo_numero_nfe', 
            'ultimo_numero_nfce', 
            'ultimo_numero_cte', 
            'ultimo_numero_mdfe', 
            'inscricao_municipal',  
            
            'numero_serie_nfe',
            'numero_serie_nfce',
            'ambiente',
            'regime',

            'cst_csosn_padrao', 
            'cst_cofins_padrao', 
            'cst_pis_padrao',
            'cst_ipi_padrao',

            'perc_icms_padrao',
            'perc_pis_padrao',
            'perc_cofins_padrao',
            'perc_ipi_padrao', 

            'ncm_padrao',
            'cfop_saida_estadual_padrao',
            'cfop_saida_inter_estadual_padrao',

            'csc', 
            'csc_id', 

            'aut_xml',

    ];


   
}
