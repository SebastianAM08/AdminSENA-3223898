<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{

   public function index(){
      $training_centers = TrainingCenter::all();

     return view('training_center.index', compact('training_centers'));
    }
   
   public function show($id){
      $training_center = TrainingCenter::findOrFail($id);

      return view('training_center.show', compact('training_center'));
   }


  public function create(){

    return view('training_center.create');
}

   public function store(Request $request){

    $training_center = TrainingCenter::create($request->all());

    return redirect()->route('training_center.index')->with('success', 'Centro de formación creado correctamente.');
}

   public function edit($id){
   $training_center = TrainingCenter::findOrFail($id);
   return view('training_center.edit', compact('training_center'));
}

   public function update(Request $request, $id){
   $training_center = TrainingCenter::findOrFail($id);
   $training_center->update($request->all());
   return redirect()->route('training_center.index')->with('success','Centro actualizado.');
}

   public function destroy($id){
   $training_center = TrainingCenter::findOrFail($id);
   $training_center->delete();
   return redirect()->route('training_center.index')->with('success','Centro eliminado.');
}


  
}