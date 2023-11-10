<?php

namespace App\Http\Controllers\Api\emitente;

use App\Http\Controllers\Controller;
use App\Services\EmitenteService;
use Illuminate\Http\Request;

class UpdateEmitenteController extends Controller
{
    protected $emitenteService;

    function __construct(EmitenteService $emitenteService)
    {
        $this->emitenteService = $emitenteService;
    }


    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $uuid)
    {
        $emitente = $this->emitenteService->updateEmitenteByTenant($request->all(),$uuid);

           // dd($request->all(),$request->uuid);

           return Response()->json($emitente); 
  
    }
}
