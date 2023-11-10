<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ConsultaCnpj;
use Illuminate\Http\Request;

class ConsultaCnpjController extends Controller
{

    protected $cnpjService;

    public function __construct(ConsultaCnpj $cnpjService)
    {

        $this->cnpjService = $cnpjService;
    }
    
    /**
     * Handle the incoming request.
     */
    public function __invoke($uuid)
    {
        return $this->cnpjService->consultaCnpj($uuid);

      // dd($uuid);
    }
}
