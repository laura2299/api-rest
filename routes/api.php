<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanctumAuthController;
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
Route::post('/auth/register', [AuthController::class, "registro"]);
Route::post('/auth/login', [AuthController::class, "login"]);

Route::middleware('auth:sanctum')->group(function () {
    Route::post("perfil",[AuthController::class, "perfil"]);
    Route::post("logout",[AuthController::class, "logout"]);
    

});