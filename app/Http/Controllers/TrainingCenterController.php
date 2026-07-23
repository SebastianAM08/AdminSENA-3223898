<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{

   public function index(){
      $training_center= Trainingcenter::all();

     return view('training_center.index',compact('training_center'));
    }
   


  public function create(){

    return view('training_center.create');
}

   public function store(Request $request){

    $training_center = new TrainingCenter();

    $training_center->name = $request->name;

    $training_center->location = $request->location;

    $training_center->save();

    return $training_center;
}


  
}