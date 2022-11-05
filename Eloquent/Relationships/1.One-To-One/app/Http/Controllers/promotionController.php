<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use App\Models\apprenant;
use Illuminate\Http\Request;

class promotionController extends Controller
{
    //  one to one
    public function hasOne()
    {

        $data = promotion::find(1)->HasOneapprenant;
        
        return view('index',compact('data')) ;
    }
}
