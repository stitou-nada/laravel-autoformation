<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
   
 function index(Request $request){
     $name = $request->input("name");
    return view('index',compact("name"));
        }
    
    
}
