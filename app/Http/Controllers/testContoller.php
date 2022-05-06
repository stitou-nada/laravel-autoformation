<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
class testContoller extends Controller
{


   
    public function show($id)
    {
       $posts = [
           1 => 'numero de nada est 1',
           2 => 'numero de hicham est 2'
       ];
          $post = $posts[$id]; 
       return view('presentation/person',compact("post"));
    }
}
