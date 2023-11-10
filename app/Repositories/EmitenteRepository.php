<?php

namespace App\Repositories;

use App\Models\Emitente;
use Illuminate\Support\Facades\DB;

class EmitenteRepository
{
    protected $table;
    protected $repository;

public function __construct(Emitente $emitente)
{
    $this->repository = $emitente;
    $this->table = 'emitentes';
}

function createNewEmitente($emitente)
{
    
    $data = [

    'token_company' =>  $emitente['token_company'],
    'time_zone' =>  $emitente['time_zone' ],
    'logo' =>  $emitente['logo'],
    'razao_social' =>  $emitente['razao_social'],
    'fantasia' =>  $emitente['fantasia'],
    'cnpj' =>  $emitente['cnpj'],
    'ie' =>  $emitente['ie'],

    'municipio' =>  $emitente['municipio'],
    'uf' =>  $emitente['uf'],

    'logradouro' =>  $emitente['logradouro'], 
    'numero' =>  $emitente['numero'], 
    'bairro' =>  $emitente['bairro'],
    'cep' =>  $emitente['cep'], 
    'telefone' =>  $emitente['telefone'], 

    ];

   $cadastro_emitente = $this->repository->create($data);

   return response()->json($cadastro_emitente);

   //dd($data);
}


function getEmitenteSpecificRepository($uuid, $emitente)
{
    return DB::table($this->table)
    ->where('token_company', $emitente)
    ->where('uuid', $uuid)
    ->paginate();

}

function getEmitenteRepository($emitente)
{
    return DB::table($this->table)
    ->where('token_company', $emitente)
    ->paginate();

}

public function updateCategoryByTenant(array $emitente, string $uuid)
{
    return DB::table($this->table)
    ->where('token_company', $emitente['token_company'])
    ->where('uuid', $uuid)
    ->update($emitente);

}

public function deleteEmitente(string $emitente, string $uuid)
{
   dd($emitente, $uuid);
}
}