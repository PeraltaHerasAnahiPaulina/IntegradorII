<?php

namespace App\Http\Controllers;
use App\Models\carrera;
use App\Models\docencia;
use Illuminate\Http\Request;

class DocenciaController extends Controller
{
    
    public function index()
    {
        $docencia = docencia::Select('docencias.id',
    'docencias.nom_docencia','carreras.nom_carrera')
    ->join('carreras','carreras.id','docencias.carrera_id')->get();
        return view('docencia.index',compact('docencia'));
    }
    public function edit($id)
    {
        //
        $carrera = carrera::all();
        $docencia = docencia::findOrFail($id);
        return view('docencia.edit', compact('carrera','docencia'));
     }

    public function create()
    {
        //
        
        $carrera = carrera::all();
        return view('docencia.add',compact('carrera'));
    }
    public function show($id)
    {
        //
        $docencia = docencia::Select('docencias.id'
      ,'docencias.nom_docencia',
      'carreras.nom_carrera')
      ->join('carreras','carreras.id','docencias.carrera_id')->first();
      return view('docencia.show')->with('docencia',$docencia);

    }

    /**
     /////////////////////////////////////////////.
     */
    public function update(Request $request, $id)
    {
        //
        $docencia = docencia::findOrFail($id);
        $rules =[
          'nom_docencia'=> '',
          'carrera_id'=>''
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $docencia->update($input);
        return redirect('docencia')->with('message','Se ha actualizado el registro correctamente');
    }
    public function destroy($id)
    {
        //
        $docencia = docencia::find($id);

        if(is_null($docencia)){
    
            return  redirect()->route('docencia.index');
    
        }
    
        $docencia->delete();
        return redirect()->route('docencia.index');
      
    }
    public function store(Request $request)
    {
        //
        $rules =[
            'nom_docencia'=> 'required',
            'carrera_id'=>''
        ];
      
        $message = [
         'nom_docencia.required'=> 'El campo  esta vacio',
         'carrera_id.required'=>'El campo  esta vacio'
        ];
      
        $this->validate($request, $rules, $message);
        $input=$request->all();
        docencia::create($input);
        return redirect('docencia')->with('message','Se ha creado correctamente');
        
    }

   
}
