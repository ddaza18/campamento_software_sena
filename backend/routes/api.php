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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 //   return $request->user();
//});


//La clase Route solo se encarga de rutas
//metodo apiResource: permite crear rutas de cambio de estado para una entidad

Route::apiResource('bootcamps', BootcampController::class);
