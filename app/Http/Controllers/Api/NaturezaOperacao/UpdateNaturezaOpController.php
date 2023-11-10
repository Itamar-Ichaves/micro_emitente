<?php

namespace App\Http\Controllers\Api\NaturezaOperacao;

use App\Http\Controllers\Controller;
use App\Services\NaturezaOperacaoService;
use Illuminate\Http\Request;

class UpdateNaturezaOpController extends Controller
{
    protected $natOpService;

    public function __construct(NaturezaOperacaoService $natOpService)
    {
        $this->natOpService = $natOpService;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $this->natOpService->deleteNaturezaOp($request->token_company, $request->uuid);
    }
}
