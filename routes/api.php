<?php

use App\Http\Controllers\Api\Certificado\{
    deleteCertificadoController,
    GetCertificadoController,
    PostCertificadoController,
    UpdateCertificadoController
};

use App\Http\Controllers\Api\ConsultaCnpjController;

use App\Http\Controllers\Api\emitente\{
    CreateEmitenteController,
    DeleteEmitenteController,
    GetEmitenteController,
    GetEmitenteSpecificController,
    UpdateEmitenteController
};
use App\Http\Controllers\Api\NaturezaOperacao\{
    CreateNaturezaOpController,
    DeleteNaturezaOpController,
    GetNaturezaOpController,
    GetSpecificNaturezaOpController,
    UpdateNaturezaOpController
};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware(['auth:api', 'can:admin-micro'])->group(function () {
    Route::get('/me', function () {
        return 'success';
    }); 

});

/*
// Route Emitente
*/
Route::post('/emitente', CreateEmitenteController::class);
Route::get('/emitente', GetEmitenteController::class);
Route::get('/emitente/{uuid}', GetEmitenteSpecificController::class);
Route::delete('/emitente/{uuid}', DeleteEmitenteController::class);
Route::put('/emitente/{uuid}', UpdateEmitenteController::class);

/*
// Route Consultas
*/
Route::get('/cnpj/{cnpj}', ConsultaCnpjController::class);

/*
// Route Certificado
*/
Route::post('/certificado', PostCertificadoController::class);
Route::get('/certificado', GetCertificadoController::class);
Route::put('/certificado/{uuid}', UpdateCertificadoController::class);
Route::delete('/certificado/{uuid}', deleteCertificadoController::class);

/*
// Route Natureza da operação
*/
Route::post('/natop', CreateNaturezaOpController::class);
Route::delete('/natop/{uuid}', DeleteNaturezaOpController::class);
Route::get('/natop', GetNaturezaOpController::class);
Route::get('/natop/{uuid}', GetSpecificNaturezaOpController::class);
Route::put('/natop/{uuid}', UpdateNaturezaOpController::class);

