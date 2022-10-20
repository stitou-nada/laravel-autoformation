<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    // exmple 1 
    public function index()
    {
        $users = DB::table('promotion')->get();
         
        return view('index',compact('users'));
    }

    // exmple 2

    public function afficher($id)
    {
        $users = DB::table('promotion')
        ->where('id_promotion',$id)
        ->get();

        return view('index',compact('users'));
    }


    // exmple 3 
    public function first()
    {
        $users = DB::table('promotion')
        ->first();
        
 
        return view('pageID',compact('users'));
    }
    // exmple 4 
    public function count()
    {
        $users = DB::table('promotion')->count();
        return view('index',compact('users'));
    }
    // exmple 5 
    public function max()
    {
        // $users = DB::table('promotion')->min('id_promotion');
        $users = DB::table('promotion')->max('id_promotion');
        return view('index',compact('users'));
    }
    // exmple 6 (selecet statment)
    public function selecte()
    {
        $users = DB::table('promotion')
            ->select('name_promotion')
            ->get();
        return view('index',compact('users'));
    }

    //exmple 7 (JOIN)
     public function join()
     {

         $users = DB::table('person')
         ->join('promotion', 'person.Name_promotion', '=', 'promotion.id_promotion')
         ->select('person.*', 'promotion.name_promotion')
         ->get();
         
         return view('index',compact('users'));

     }
    //exmple 8 (JOIN-left)
     public function LeftJoin()
     {

        $users = DB::table('person')
        ->leftJoin('promotion', 'person.Name_promotion', '=', 'promotion.id_promotion')
        ->get();
         
         return view('index',compact('users'));

     }
    //exmple 9 (Cross JOIN)
     public function CrossJoin()
     {

        $users = DB::table('person')
            ->crossJoin('promotion')
            ->get();
         
            
         return view('index',compact('users'));

     }
     


    }



