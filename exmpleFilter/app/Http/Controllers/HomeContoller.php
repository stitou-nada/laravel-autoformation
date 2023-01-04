<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
       $trainers = tache::orderBy('ranking', 'asc')->paginate(5);
       $data = $request->all();
       

      if ($request->has('expertise_area')) {
          $ids = $request->expertise_area;
          $trainers = tache::whereHas('expertiseAreas', function($q) use ($ids)
          {
              $q->whereIn('expertise_area_id', $ids);
          })->orderBy('ranking', 'asc')->paginate(5);
      }
      

      if ($request->has('state') && $request->has('city')) {
          $trainers = tache::where('state_id', $request->state)->where('city_id', $request->city)->orderBy('ranking', 'asc')->paginate(5);
      }

      if ($request->has('state')) {
          $trainers = tache::where('state_id', $request->state)->orderBy('ranking', 'asc')->paginate(5);
      }

      if ($request->has('city')) {
          $trainers = tache::where('city_id', $request->city)->orderBy('ranking', 'asc')->paginate(5);
      } 
      
      
   
      
     
      
      return view('pagination', compact('states', 'cities', 'expertise_areas', 'trainers','data'));
  }
}
