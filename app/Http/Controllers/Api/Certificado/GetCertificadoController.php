<?php

namespace App\Http\Controllers\Api\Certificado;

use App\Http\Controllers\Controller;
use App\Services\CertificadoService;
use Illuminate\Http\Request;

class GetCertificadoController extends Controller
{
   protected $certificadoService;

   public function __construct(CertificadoService $certificadoService) 
    {
        $this->certificadoService = $certificadoService;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       $certificado = $this->certificadoService->getCertificado($request->token_company, $request->emitente_uuid);

       return response( $certificado);

      // dd($request->token_company, $request->emitente_uuid);

    }
}
