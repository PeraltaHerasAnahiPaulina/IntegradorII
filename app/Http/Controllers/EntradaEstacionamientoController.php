<?php

namespace App\Http\Controllers;
use App\Models\tipo_vehiculo;
use App\Models\entrada_estacionamiento;
use Illuminate\Http\Request;

class EntradaEstacionamientoController extends Controller
{
    
    public function index()
    {
      $entrada_estacionamiento = entrada_estacionamiento::Select('entrada_estacionamientos.id'
      ,'entrada_estacionamientos.matricula_auto',
      'entrada_estacionamientos.modelo',
      'tipo_vehiculos.nom_tipo_vehiculo',)
      ->join('tipo_vehiculos','tipo_vehiculos.id','entrada_estacionamientos.tipo_vehiculo_id')->get();
      return view('entrada_estacionamiento.index', compact('entrada_estacionamiento'));
    }
    public function edit($id)
    {
      $tipo_vehiculo = tipo_vehiculo::all();
      $entrada_estacionamiento = entrada_estacionamiento::findOrFail($id);
      return view('entrada_estacionamiento.edit', compact('entrada_estacionamiento','tipo_vehiculo'));



      $entrada_estacionamiento = entrada_estacionamiento::find($id);
      return view('entrada_estacionamiento.edit')->with('entrada_estacionamiento', $entrada_estacionamiento);
   
       //return view('Driver.edit');
    }
    public function create()
    {
      $tipo_vehiculo = tipo_vehiculo::all('id','nom_tipo_vehiculo');

       return view('entrada_estacionamiento.add',compact('tipo_vehiculo'));
    }
    public function show($id)
    {
      $entrada_estacionamiento = entrada_estacionamiento::Select('entrada_estacionamientos.id'
      ,'entrada_estacionamientos.matricula_auto',
      'entrada_estacionamientos.modelo',
      'tipo_vehiculos.nom_tipo_vehiculo',)
      ->join('tipo_vehiculos','tipo_vehiculos.id','entrada_estacionamientos.tipo_vehiculo_id')->first();
      return view('entrada_estacionamiento.show', compact('entrada_estacionamiento'));
    }
    public function update(Request $request, $id)
    {
    //
    if($request->hasFile('License')){
      $entrada_estacionamiento['License']=$request->file('License')->store('image','public');
    }
    $entrada_estacionamiento = entrada_estacionamiento::findOrFail($id);
    $rules =[
      'matricula_auto'=> 'required|min:1',
      'modelo' =>'required|min:1'
,    ];

    $this->validate($request, $rules);
    $input=$request->all();
    $entrada_estacionamiento->update($input);
    return redirect('entrada_estacionamiento')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $entrada_estacionamiento = entrada_estacionamiento::find($id);

    if(is_null($entrada_estacionamiento)){

        return  redirect()->route('entrada_estacionamiento.index');

    }

    $entrada_estacionamiento->delete();
    return redirect()->route('entrada_estacionamiento.index');
  
   }
   public function store(Request $request)
   {
    //
    if($request->hasFile('License')){
      $User['License']=$request->file('License')->store('uploads','public');
    }
    $rules =[
      'matricula_auto'=> 'required',
      'modelo' =>'required'
  ];

  $message = [
   'matricula_auto.required'=> 'El campo  esta vacio',
   'modelo.required' =>'El campo  esta vacio'
  ];

  $this->validate($request, $rules, $message);
  $input=$request->all();
  entrada_estacionamiento::create($input);
  return redirect('entrada_estacionamiento')->with('message','Se ha creado correctamente ');

   }
}
