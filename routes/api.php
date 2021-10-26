<?php

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

$updated_info = array(
    'cantidad_de_personas' => 5, //int de 1 a 7
    'asiento1' => 1, //int de -1 a 1 donde -1 no tiene cinto, 0 no hay nadie y 1 tiene sinto
    'asiento2' => 1, //int de -1 a 1 donde -1 no tiene cinto, 0 no hay nadie y 1 tiene sinto
    'asiento3' => 0, //int de -1 a 1 donde -1 no tiene cinto, 0 no hay nadie y 1 tiene sinto
    'asiento4' => 1, //int de -1 a 1 donde -1 no tiene cinto, 0 no hay nadie y 1 tiene sinto
    'asiento5' => 1, //int de -1 a 1 donde -1 no tiene cinto, 0 no hay nadie y 1 tiene sinto
    'asiento6' => 0, //int de -1 a 1 donde -1 no tiene cinto, 0 no hay nadie y 1 tiene sinto
    'asiento7' => 0, //int de -1 a 1 donde -1 no tiene cinto, 0 no hay nadie y 1 tiene sinto
);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-info', function () use ($updated_info){

    return json_encode($updated_info);

//    return $updated_info;
});

