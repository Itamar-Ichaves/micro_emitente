<?php

namespace App\Http\Controllers\Api\NaturezaOperacao;

use App\Http\Controllers\Controller;
use App\Http\Resources\NaturezaOpResource;
use App\Services\NaturezaOperacaoService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateNaturezaOpController extends Controller
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
       $natOp = $this->natOpService->CreateNaturezaOp($request);
      
        return response()->json([
            'success' => true,
            'message' => 'Categoria Criada com Sucesso',
            'data' => new NaturezaOpResource($natOp)
        ], Response::HTTP_CREATED);
       
    }
}
