<?php

namespace App\Http\Controllers\Api\Certificado;

use App\Http\Controllers\Controller;
use App\Services\CertificadoService;
use Illuminate\Http\Request;

class PostCertificadoController extends Controller
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
        $certificado = $this->certficadoService->postCertificado($request);

       return response($certificado);

       // dd($certificado);


    }
}
