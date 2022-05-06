<?php

// use App\Http\Controllers\testContoller;
use App\Http\Controllers\TestContoller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TutorialController;
use App\Models\Tutorial;
use App\Models\test;
use Illuminate\Support\Facades\Route;

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
//view


route::get('/test/{id}',[testContoller::class,'show']);

// view avec blade
Route::get('/home', function () {
    return view('pages.home');
    });
Route::get('/about', function () {
    return view('pages.about');
    });
Route::get('/contact', function () {
    return view('pages.contact');
    });
 
//view avec base de donne
route::get('/tutorials',[TutorialController::class,'index']);


route::get('/testt',[TestController::class,'index']);
 
