<?php

namespace App\Http\Controllers\Api\emitente;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmitenteResource;
use App\Services\EmitenteService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateEmitenteController extends Controller
{
    protected $emitenteService;

    function __construct(EmitenteService $emitenteService)
    {
        $this->emitenteService = $emitenteService;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

     $emitente = $this->emitenteService->CreateEmitente($request->all());

     return response()->json($emitente);
    
    }
}
