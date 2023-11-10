<?php

namespace App\Http\Controllers\Api\Certificado;

use App\Http\Controllers\Controller;
use App\Services\CertificadoService;
use Illuminate\Http\Request;

class UpdateCertificadoController extends Controller
{
    protected $certficadoService;

    public function __construct (CertificadoService $certficadoService)
    {
        $this->certficadoService = $certficadoService;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $certificado = $this->certficadoService->updateCertificado($request->token_company, $request->emitente_uuid);

        return response( $certificado);
 
       // dd($request->token_company, $request->emitente_uuid);
    }
}
