<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(){
      $areas = Area::all();

     return view('area.index', compact('areas'));
    }
   
   public function show($id){
      $area = Area::findOrFail($id);

      return view('area.show', compact('area'));
   }
   
   public function create(){

    return view('area.create');
}

  public function store(Request $request){
    $area = Area::create($request->all());

    return redirect()->route('area.index')->with('success', 'Área creada correctamente.');
}

  public function edit($id){
    $area = Area::findOrFail($id);
    return view('area.edit', compact('area'));
  }

  public function update(Request $request, $id){
    $area = Area::findOrFail($id);
    $area->update($request->all());
    return redirect()->route('area.index')->with('success', 'Área actualizada.');
  }

  public function destroy($id){
    $area = Area::findOrFail($id);
    $area->delete();
    return redirect()->route('area.index')->with('success', 'Área eliminada.');
  }

   
}