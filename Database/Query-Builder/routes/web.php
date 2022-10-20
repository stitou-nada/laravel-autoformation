<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// exmple 1 
Route::get('/index',[UserController::class,'index']);
// exmple 2
Route::get('/page/{id}',[UserController::class,'afficher']);
// exmple 3
Route::get('/first',[UserController::class,'first']);
// exmple 4
Route::get('/count',[UserController::class,'count']);
// exmple 5
Route::get('/max',[UserController::class,'max']);
// exmple 6 (select)
Route::get('/select',[UserController::class,'selecte']);
// exmple 7 (join)
Route::get('/join',[UserController::class,'join']);
// exmple 8 (left join)
Route::get('/join-left',[UserController::class,'LeftJoin']);
// exmple 9 (cross join)
Route::get('/crossJoin',[UserController::class,'CrossJoin']);
