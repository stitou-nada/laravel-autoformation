<?php

namespace App\Http\Controllers;
use App\Models\promotion;
use App\Models\apprenant;

use Illuminate\Http\Request;

class PromotionController extends Controller
{

// one to one

public function hasOne(){

    $data = promotion::find(1)->oneApprenant;

    return view ('/index',compact('data'));
}
// belongsTo
  public function belongsTo(){
    $data = apprenant::find(1);
    $data->apprenant;
    
    return view ('index',compact('data'));
}

// one to many

public function hasMany(){
    $data = promotion::find(1)->hasManyApprenant;
    return view ('hasMany',compact('data'));
}

// many to many

public function ManyToMany(){
    $data = promotion::find(1);
    $data->apprenant;


    return view('many',compact('data'));
}

}

