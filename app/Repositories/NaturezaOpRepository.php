<?php

namespace App\Repositories;

use App\Models\NaturezaDaOperacao;
use App\Models\NaturezaOp;
use Illuminate\Support\Facades\DB;

class NaturezaOpRepository
{
    protected $table;
    protected $repository;

public function __construct(NaturezaOp $naturezaOp)
{
    $this->repository = $naturezaOp;
    $this->table = 'NaturezaDaOperacao';
}

function createNewNaturezaOp($naturezaOp)
{
   // dd($naturezaOp);
    $data = [

    'token_company' =>  $naturezaOp['token_company'],
    'emitente' => $naturezaOp['emitente'],
    'titulo_interno' =>  $naturezaOp['titulo_interno' ],
    'natureza_da_operacao' =>  $naturezaOp['natureza_da_operacao'],
    'tipo' =>  $naturezaOp['tipo'],
    'finNfe' =>  $naturezaOp['finNfe'],
    'indPres' =>  $naturezaOp['indPres'],
    'devolução'=> $naturezaOp['devolução'],
    'padrão' =>  $naturezaOp['padrão']

    ];
   // dd($data);
   $cadastro_naturezaOp = $this->repository->create($data);

   return $cadastro_naturezaOp;

  
}


function getNaturezaOpSpecificRepository($company, $emitente, $uuid)
{
    return DB::table($this->table)
    ->where('token_company', $company)
    ->where('emitente_uuid', $emitente)
    ->where('uuid', $uuid)
    ->paginate();

}

function getNaturezaOpRepository($company, $emitente)
{
    return DB::table($this->table)
    ->where('token_company', $company)
    ->where('emitente_uuid', $emitente)
    ->paginate();

}

public function updateCategoryByTenant(array $naturezaOp, string $uuid)
{
    return DB::table($this->table)
    ->where('token_company', $naturezaOp['token_company'])
    ->where('uuid', $uuid)
    ->update($naturezaOp);

}

public function deleteNaturezaOp(string $campany, string $uuid)
{
    return DB::table($this->table)
    ->where('token_company', $campany)
    ->where('uuid', $uuid)
    ->delete();
    //dd($tenant, $uuid);
}
}