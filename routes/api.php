<?php

use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutoController;
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

Route::apiResource('produtos', ProdutoController::class);
Route::apiResource('movimentacoes', MovimentacaoController::class)->except([
    'update', 'destroy'
]);
