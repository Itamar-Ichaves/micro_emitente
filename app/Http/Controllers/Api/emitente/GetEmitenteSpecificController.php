<?php

namespace App\Http\Controllers\Api\emitente;

use App\Http\Controllers\Controller;
use App\Services\EmitenteService;
use Illuminate\Http\Request;

class GetEmitenteSpecificController extends Controller
{

    protected $emitente;

    public function __construct(EmitenteService $emitente)
    {

        $this->emitente = $emitente;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $uuid)
    {
        $emitente = $this->emitente->getEmitenteSpecific($uuid, $request->token_company);

        return response()->json($emitente);
    }
}
