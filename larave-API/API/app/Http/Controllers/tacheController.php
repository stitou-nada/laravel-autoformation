<?php

namespace App\Http\Controllers;
use App\models\tache;

use Illuminate\Http\Request;

class tacheController extends Controller
{
    public  function Afficher(){

        return response()->json(tache::all());
    }


    public  function store(Request $request){

       $tache= tache::create([
            'Nom_de_la_tache' =>$request->nom
        ])->save();
        if($tache){
            return response()->json(["status" => "success"]);
        }
         else{
           return response()->json(["status" => "error"]);
    }
    }


    public function update( Request $request ,$id){

        $tache = tache::find($id)
        ->update([
            'Nom_de_la_tache' =>$request->nom
        ]);
        if($tache){
            return response()->json(["status" => "edit success"]);
        }
         else{
           return response()->json(["status" => "error "]);
    }
    }


    function delete($id){
        tache ::find($id)
        ->delete();
    }
}
