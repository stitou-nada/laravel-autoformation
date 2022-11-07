<?php

namespace App\Http\Controllers;
use App\Models\promotion;
use App\Models\apprenant;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    // one to one
    public function hasOne(){
        $data = promotion::find(1)->hasOneApprenant;
        return $data;
    }

    // belongsTo

    public function belongsTo(){

        $data = apprenant::find(1);
        $data->promotion;

        return $data;
    }

    // one TO Many

    public function hasMany(){
        $data = promotion::find(1);
        $data->hasManyApprenant;
        return $data;
    }


}

