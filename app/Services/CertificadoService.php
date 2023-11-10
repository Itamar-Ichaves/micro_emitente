<?php

namespace App\Services;

use App\Repositories\CertificadoRepository;

class CertificadoService
{

    protected $certificadoRepository;

public function __construct(
    CertificadoRepository $certificadoRepository
)
{
    $this->certificadoRepository = $certificadoRepository;
}

function postCertificado( $certificado)
{
   $this->certificadoRepository->salveNewCertificado($certificado);

   // dd($certificado);
}


function getCertificado(string $company, string $emitente) 
{
   return $this->certificadoRepository->getCertificadoRepository($company, $emitente);

   //dd($company, $emitente);

}

public function deleteCertificado(string $certificado, string $uuid)
    {
         return $this->certificadoRepository->deletecertificado($certificado, $uuid);
       
    }

function updateCertificado(array $certificado, string $emitente)
{
  
   return $this->certificadoRepository->updateCategoryByTenant($certificado, $emitente);
}

}