<?php

namespace App\Http\Controllers;

use App\Models\promotion;

use Illuminate\Http\Request;

class promotionController extends Controller
{
    //  one to many
    public function hasMany()
    {
        $data = promotion::find(1)->HasManyapprenant ;
        return view('index',compact('data'))  ;
    }
}
