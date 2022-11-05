<?php

namespace App\Http\Controllers;


use App\Models\apprenant;
use App\Models\promotion as ModelsPromotion;
use Illuminate\Http\Request;

class promotion extends Controller
{
    //many to many

    public function belongsTo()
    {
        $data = apprenant::find(2);
        return $data->promotion .$data  ;
       
        

    }

    public function belongsToMany(){

        $user = ModelsPromotion::find(2);

            // dd($user->apprenant);
            return $user->apprenant .$user ;
    }

}
