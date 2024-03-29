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

//Accessing The Request

//exmple 1 :Request form 
Route::get('/index', function () {
    return view('form');
});
Route::any("Request",[UserController::class,"index"]);


 //exmple 2 : par id

 Route::get('/formPerson', function () {
    return view('formPerson');
    });
Route::any("Person/{id}",[UserController::class,"findId"]);

