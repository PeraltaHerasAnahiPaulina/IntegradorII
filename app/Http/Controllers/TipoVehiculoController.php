<?php

namespace App\Http\Controllers;

use App\Models\tipo_vehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    public function index()
    {
        $tipo_vehiculo = tipo_vehiculo::all();
        return view('tipo_vehiculo.index',compact('tipo_vehiculo'));
    }
    public function edit($id)
    {
        //
        $tipo_vehiculo = tipo_vehiculo::find($id);
        return view('tipo_vehiculo.edit')->with('tipo_vehiculo', $tipo_vehiculo);
    }

    public function create()
    {
        //
        return view('tipo_vehiculo.add');
    }
    public function show($id)
    {
        //
        $tipo_vehiculo = tipo_vehiculo::find($id);
      return view('tipo_vehiculo.show')->with('tipo_vehiculo',$tipo_vehiculo);
   
    }

    /**
     /////////////////////////////////////////////.
     */
    public function update(Request $request, $id)
    {
        //
        $tipo_vehiculo = tipo_vehiculo::findOrFail($id);
        $rules =[
          'nom_tipo_vehiculo'=> 'required|min:80'
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $tipo_vehiculo->update($input);
        return redirect('tipo_vehiculo')->with('message','Se ha actualizado el registro correctamente');
    }
    public function destroy($id)
    {
        //
        $tipo_vehiculo = tipo_vehiculo::find($id);

        if(is_null($tipo_vehiculo)){
    
            return  redirect()->route('tipo_vehiculo.index');
    
        }
    
        $tipo_vehiculo->delete();
        return redirect()->route('tipo_vehiculo.index');
      
    }
    public function store(Request $request)
    {
        //
        $rules =[
            'nom_tipo_vehiculo'=> 'required|min:5|unique:tipo_vehiculos'
        ];
      
        $message = [
         'nom_tipo_vehiculo.required'=> 'El campo  esta vacio'
        ];
      
        $this->validate($request, $rules, $message);
        $input=$request->all();
        tipo_vehiculo::create($input);
        return redirect('tipo_vehiculo')->with('message','Se ha creado correctamente');
        
    }
}
