<?php

namespace App\Http\Controllers;

use App\Models\carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        $carrera = carrera::all();
        return view('carrera.index',compact('carrera'));
    }
    public function edit($id)
    {
        //
        $carrera = carrera::find($id);
        return view('carrera.edit')->with('carrera', $carrera);
    }

    public function create()
    {
        //
        return view('carrera.add');
    }
    public function show($id)
    {
        //
        $carrera = carrera::find($id);
      return view('carrera.show')->with('carrera',$carrera);
   
    }

    /**
     /////////////////////////////////////////////.
     */
    public function update(Request $request, $id)
    {
        //
        $carrera = carrera::findOrFail($id);
        $rules =[
          'nom_carrera'=> 'required|min:10'
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $carrera->update($input);
        return redirect('carrera')->with('message','Se ha actualizado el registro correctamente');
    }
    public function destroy($id)
    {
        //
        $carrera = carrera::find($id);

        if(is_null($carrera)){
    
            return  redirect()->route('carrera.index');
    
        }
    
        $carrera->delete();
        return redirect()->route('carrera.index');
      
    }
    public function store(Request $request)
    {
        //
        $rules =[
            'nom_carrera'=> 'required|min:10|unique:carreras'
        ];
      
        $message = [
         'nom_carrera.required'=> 'El campo  esta vacio'
        ];
      
        $this->validate($request, $rules, $message);
        $input=$request->all();
        carrera::create($input);
        return redirect('carrera')->with('message','Se ha creado correctamente');
        
    }
    
}
