<?php

namespace App\Http\Controllers\Api\emitente;

use App\Http\Controllers\Controller;
use App\Services\EmitenteService;
use Illuminate\Http\Request;

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

     $this->emitenteService->CreateEmitente($request);

     

      // dd($request);
    }
}
