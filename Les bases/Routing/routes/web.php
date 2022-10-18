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
    //  route basic
// Route::get('/index', function () {
//     return ('hello world');
// });


        //Route avec controller
Route::get('/index',[UserController::class,'index']);

// Methode match 

Route::match(['get','post'],'/page',function(){
  return('nada');
});

// Methode any

Route::any(('/pages'),function(){
 return('helle tous le monde');
});