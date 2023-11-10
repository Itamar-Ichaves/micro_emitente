<?php

namespace App\Services;

use App\Repositories\NaturezaOpRepository;

class NaturezaOperacaoService
{

    protected $consultaCnpj, $naturezaOpRepository;

public function __construct(
    ConsultaCnpj $consultaCnpj,
    NaturezaOpRepository $naturezaOpRepository
)
{
    $this->consultaCnpj = $consultaCnpj;
    $this->naturezaOpRepository = $naturezaOpRepository;
}

function CreateNaturezaOp($naturezaOp)
{
   $this->naturezaOpRepository->createNewNaturezaOp($naturezaOp);

   //dd($naturezaOp);
}

function getNaturezaOpSpecific($company, $emitente, $uuid) 
{
   return $this->naturezaOpRepository->getNaturezaOpSpecificRepository($company, $emitente, $uuid);


    //dd($uuid, $naturezaOp);
}

function getNaturezaOp(string $company, string $emitente) 
{
   return $this->naturezaOpRepository->getNaturezaOpRepository($company, $emitente);


    //dd($uuid, $naturezaOp);
}

public function deleteNaturezaOp(string $company, string $uuid)
    {
         return $this->naturezaOpRepository->deleteNaturezaOp($company, $uuid);
       
    }

function updateNaturezaOpByTenant(array $naturezaOp, string $uuid)
{
  
   return $this->naturezaOpRepository->updateCategoryByTenant($naturezaOp, $uuid);
    }
}