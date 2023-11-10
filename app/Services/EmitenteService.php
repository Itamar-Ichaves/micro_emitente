<?php

namespace App\Services;

use App\Repositories\EmitenteRepository;

class EmitenteService
{

    protected $consultaCnpj, $emitenteRepository;

public function __construct(
    ConsultaCnpj $consultaCnpj,
    EmitenteRepository $emitenteRepository
)
{
    $this->consultaCnpj = $consultaCnpj;
    $this->emitenteRepository = $emitenteRepository;
}

function CreateEmitente($emitente)
{
   $this->emitenteRepository->createNewEmitente($emitente);

  //dd($emitente);
}

function getEmitenteSpecific($uuid, $emitente) 
{
   return $this->emitenteRepository->getEmitenteSpecificRepository($uuid, $emitente);


    //dd($uuid, $emitente);
}

function getEmitente(string $emitente) 
{
   return $this->emitenteRepository->getEmitenteRepository($emitente);


    //dd($uuid, $emitente);
}

public function deleteEmitente(string $tenant, string $uuid)
    {
         return $this->emitenteRepository->deleteEmitente($tenant, $uuid);
       
    }

function updateEmitenteByTenant(array $emitente, string $uuid)
{
  
   return $this->emitenteRepository->updateCategoryByTenant($emitente, $uuid);
    }
}