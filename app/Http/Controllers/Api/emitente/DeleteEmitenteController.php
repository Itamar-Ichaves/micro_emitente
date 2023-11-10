<?php

namespace App\Http\Controllers\Api\emitente;

use App\Http\Controllers\Controller;
use App\Services\EmitenteService;
use Illuminate\Http\Request;

class DeleteEmitenteController extends Controller
{ 
    protected $repository;

    public function __construct(EmitenteService $category)
    {
        $this->repository = $category;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
          $this->repository->deleteEmitente($request->token_company, $request->uuid);

    }
}
