<?php

namespace App\Http\Controllers;

use App\Models\Laravel;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        $tutos= Laravel::all();
        return view('pages.Tutorials', compact('tutos'));
    }
public function insert(){
    $person = new laravel();
    $person->namee="nadaaa";
    $insert =$person->save();
    return view ("test/crud",compact('insert'));
}
}
