<?php

namespace App\Http\Controllers;
use App\Models\entrada_estacionamiento;
use App\Models\tipo_entrada;
use Illuminate\Http\Request;

class TipoEntradaController extends Controller
{
   
    public function index()
    {
      $tipo_entrada = tipo_entrada::Select('tipo_entradas.id','tipo_entradas.nom_entrada',
      'entrada_estacionamientos.matricula_auto')
      ->join('entrada_estacionamientos','entrada_estacionamientos.id','tipo_entradas.entrada_estacionamientos_id')->get();
      return view('tipo_entrada.index', compact('tipo_entrada'));
    }
    public function edit($id)
    {
      $entrada_estacionamiento = entrada_estacionamiento::all('id','matricula_auto');
      $tipo_entrada = tipo_entrada::find($id);
      return view('tipo_entrada.edit', compact ('tipo_entrada','entrada_estacionamiento'));
  
    }
    public function create()
    {
      $entrada_estacionamiento = entrada_estacionamiento::all('id','matricula_auto');
      $tipo_entrada = tipo_entrada::all();
      return view('tipo_entrada.add', compact('tipo_entrada','entrada_estacionamiento'));
       
    }
    public function show($id)
    {
      
      $tipo_entrada = tipo_entrada::Select('tipo_entradas.id','tipo_entradas.nom_entrada',
      'entrada_estacionamientos.matricula_auto')
      ->join('entrada_estacionamientos','entrada_estacionamientos.id','tipo_entrada.entrada_estacionamientos_id')->find($id);
      return view('tipo_entrada.show')->with('tipo_entrada',$tipo_entrada);
   
    }
    public function update(Request $request, $id)
    {
    //
   
    $tipo_entrada = tipo_entrada::find($id);
    $rules =[
      'nom_entrada'=> 'required|min:1',
     
    ];
    
    $this->validate($request, $rules);
    $input=$request->all();
    $tipo_entrada->update($input);
    return redirect('tipo_entrada')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $tipo_entrada = tipo_entrada::find($id);

        if(is_null($tipo_entrada)){

            return  redirect()->route('tipo_entrada.index');

        }

        $tipo_entrada->delete();
    return redirect()->route('tipo_entrada.index');
   }
   public function store(Request $request)
   {
    // 
    $request->validate([
      'nom_entrada'=> 'required|min:1',
     
  ]);
  tipo_entrada::create([
      'nom_entrada' => $request->nom_entrada,
      'entrada_estacionamientos_id' => $request->entrada_estacionamientos_id
  ]);

  return redirect('tipo_entrada')->with('message','Se ha creado correctamente');

   } 
}
