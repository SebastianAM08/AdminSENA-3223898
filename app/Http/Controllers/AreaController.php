<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(){
      $area= Area::all();

     return view('area.index',compact('area'));
    }
   
   
   public function create(){

    return view('area.create');
}

  public function store(Request $request){

    $area = new Area();

    $area->name = $request->name;

    $area->save();

    return $area;
}


   
}