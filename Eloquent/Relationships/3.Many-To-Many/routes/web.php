<?php

use App\Http\Controllers\promotion;
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

Route::get('/', function () {
    return view('welcome');
});

// many to many

route::get('/many',[promotion::class,'belongsToMany']);
route::get('/belongsTo',[promotion::class,'belongsTo']);