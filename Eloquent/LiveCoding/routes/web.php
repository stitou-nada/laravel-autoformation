<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// one to one
Route::get('/hasOne',[PromotionController::class,'hasOne']);

// belongsTo

Route::get('/belongsTo',[PromotionController::class,'belongsTo']);

// one to many

Route::get('/hasMany',[PromotionController::class,'hasMany']);
