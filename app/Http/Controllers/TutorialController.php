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
}
