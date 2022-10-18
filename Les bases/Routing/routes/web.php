<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

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
Route::get('/index', function () {
    return('hello world');
});


//Route avec controller
Route::get('/hello',[UserController::class,'index']);

// Methode match 

Route::match(['get','post'],'/page',function(){
  return('nada');
});

// Methode any

Route::any(('/pages'),function(){
 return('helle tous le monde');
});

//Route request
Route::any(('/input'),function(){
    return view('input');
   });

Route::get('/user',function(request $request){
   return  $request->input("name");
   
});

//Protection CSRF
Route::get('/profile',function(){
    return view('csrf');
});

Route::any('/csrf',function(request $request){
    return  $request->input("name");
    
 });
 
 //Route redirect

 Route::redirect('/here', '/there');