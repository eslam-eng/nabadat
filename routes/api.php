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

Route::POST('file/upload', [App\Http\Controllers\Api\FileController::class, 'upload']);
Route::POST('file/remove', [App\Http\Controllers\Api\FileController::class, 'remove']);
Route::GET('location/countries/{skip}/{take}',[App\Http\Controllers\Api\LocationController::class,'list']);
Route::GET('locations/{id}',[App\Http\Controllers\Api\LocationController::class,'listChildren']);
// Route::GET('cities/{country_id}', [App\Http\Controllers\Api\::class, 'remove']);
// $router->group(function () use ($router) {
// });
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



