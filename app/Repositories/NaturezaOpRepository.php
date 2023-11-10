<?php

namespace App\Repositories;

use App\Models\NaturezaDaOperacao;
use Illuminate\Support\Facades\DB;

class NaturezaOpRepository
{
    protected $table;
    protected $repository;

public function __construct(NaturezaDaOperacao $naturezaOp)
{
    $this->repository = $naturezaOp;
    $this->table = 'NaturezaDaOperacao';
}

function createNewNaturezaOp($naturezaOp)
{
    
    $data = [

    'token_company' =>  $naturezaOp['token_company'],
    'emitente_uuid' => $naturezaOp['emitente_uuid'],
    'titulo_interno' =>  $naturezaOp['titulo_interno' ],
    'title' =>  $naturezaOp['title'],
    'tipo' =>  $naturezaOp['tipo'],
    'finNfe' =>  $naturezaOp['fantasia'],
    'indPres' =>  $naturezaOp['indPres'],
    'padrão' =>  $naturezaOp['padrão'],

    ];

  // $cadastro_naturezaOp = $this->repository->create($data);

  // return response()->json($cadastro_naturezaOp);

   dd($data);
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