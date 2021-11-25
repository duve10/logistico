<?php

use App\Http\Controllers\API\PerfilController;
use App\Http\Controllers\AutenticarController;
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

// Route::get('perfiles',[PerfilController::class,'index']);
// Route::post('perfiles',[PerfilController::class,'store']);
// Route::get('perfiles/{perfil}',[PerfilController::class,'show']);
// Route::put('perfiles/{perfil}',[PerfilController::class,'update']);
// Route::delete('perfiles/{perfil}',[PerfilController::class,'destroy']);


Route::post('registro',[AutenticarController::class,'registro']);

Route::post('acceso',[AutenticarController::class,'acceso']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('cerrarsesion',[AutenticarController::class,'cerrarSesion']);
    
    Route::apiResource('perfil', PerfilController::class);
   
});
