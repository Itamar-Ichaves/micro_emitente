<?php

namespace App\Repositories;
use App\Models\CertificadoDigital;
use Illuminate\Support\Facades\DB;

class CertificadoRepository
{
    protected $table;
    protected $repository;

public function __construct(CertificadoDigital $certificado)
{
    $this->repository = $certificado;
    $this->table = 'certificado_digitals';
}

function salveNewCertificado($certificado)
{
    
    $data = [

    'token_company' =>  $certificado['token_company'],
    'emitente' => $certificado['emitente'],
    'certificado_nome_arquivo'=> $certificado['certificado_nome_arquivo'],
    'cnpj'=> $certificado['cnpj'],
    'serial'=> $certificado['serial'],
    'inicio' => $certificado['inicio'],
    'expiracao' => $certificado['expiracao'],
    'identificado' => $certificado['identificado'],
    'idctx' => $certificado['idctx']
    
    ];

 
    $cadastro_certificado = $this->repository->create($data);

   return $cadastro_certificado;

}


function getCertificadoRepository($company, $emitente)
{
    //dd($company, $emitente);


    return DB::table($this->table)
    ->where('token_company', $company)
    ->where('emitente_uuid', $emitente)
    ->paginate();

}

public function updateCategoryByTenant(array $certificado, string $emitente)
{
    return DB::table($this->table)
    ->where('emitente_uuid', $emitente)
    ->update($certificado);

}

public function deleteCertificado(string $emitente, string $uuid)
{
    return DB::table($this->table)
    ->where('token_company', $emitente)
    ->where('uuid', $uuid)
    ->delete();
    //dd($tenant, $uuid);
}
}