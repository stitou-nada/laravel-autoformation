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

      //  one to many
      public function hasMany()
      {
          $data = promotion::find(1)->HasManyapprenant ;
          return view('index',compact('data'))  ;
      }

      //many to many

    public function belongsTo()
    {
        $data = apprenant::find(2);
        return $data->promotion .$data  ;
    }

    public function belongsToMany(){

        $user = promotion::find(2);

            // dd($user->apprenant);
            return $user->apprenant .$user ;
    }
}
