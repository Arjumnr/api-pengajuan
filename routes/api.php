<?php

use App\Http\Controllers\Api\AjuanController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UnitController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-user', [LoginController::class, 'getUser']);
Route::post('/login', [LoginController::class, 'loginPost']);

Route::get('/get-unit', [UnitController::class, 'getUnit']);
Route::get('/get-ajuan', [AjuanController::class, 'getAjuan']);
