<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testContoller extends Controller
{
    public function test(){
        return view("test");
    }
}
