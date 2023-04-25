<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\docencia;
use App\Models\carrera;

class DocenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $docencia = docencia::all();
            return response()->json(['docencia'=>$docencia],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return 'Se dreo con exito';
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $docencia = docencia::Select('docencias.id'
        ,'docencias.nom_docencia',
        'carreras.nom_carrera')
        ->join('carreras','carreras.id','docencias.carrera_id')->first();
        return response()->json($docencia,200);
  
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docencia = docencia::findOrFail($id);
        $rules =[
          'nom_docencia'=> '',
          'carrera_id'=>''
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $docencia->update($input);
        return ('se creo con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
