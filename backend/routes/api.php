<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//LA CLASE ROUTE, ES UNA CLASE EN LARAVEL ENCARGADA DE RUTAS.
//metodo apiResource: PERMITE CREAR RUTAS PARA EL CAMBIO DE UAN IDENTIDAD.
Route::apiResource('bootcamps',BootcampController::class);
