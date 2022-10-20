<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PromotionController extends Controller
{
    public function index(){
        $table = DB::table('ampprenants')
        ->join('promotions','ampprenants.id_promotion','=',"promotions.Id_promotion")
        ->select('*')
        ->get();
        return view('index',compact('table'));
    }
}
