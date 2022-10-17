<?php

namespace App\Http\Controllers;

use Facade\Ignition\Support\LaravelVersion;
use Illuminate\Http\Request;
use App\Models\test;

class TestController extends Controller
{
   public function index()
   {
       $person = test::all();
       return view('pages.person',compact('person'));
   }
}
