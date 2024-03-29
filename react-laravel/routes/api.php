<?php

use App\Http\Controllers\tacheController;
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


Route::get('/tache',[tacheController::class,'index']);
Route::post('/store',[tacheController::class,"store"]);
Route::get('/edit/{id}',[tacheController::class,'edit']);
Route::put('/update/{id}',[tacheController::class,"update"]);
Route::delete('/delete/{id}',[tacheController::class,"destroy"]);
