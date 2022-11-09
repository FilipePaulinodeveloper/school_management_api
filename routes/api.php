<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\CategoriaGastoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\OrcamentoController;
use App\Models\CategoriaGasto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// User
Route::post('/login', [AuthController::class,'login']);
Route::post('register', [AuthController::class,'register']);

// Calendario
Route::apiResource('calendario', CalendarioController::class);

// Orcamento 
Route::apiResource('orcamento', OrcamentoController::class);

//Gastos
Route::apiResource('gasto', GastosController::class);

// CategoriaGasto
Route::apiResource('categoriagasto', CategoriaGastoController::class);

//Curso
Route::apiResource('curso', CursoController::class);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
