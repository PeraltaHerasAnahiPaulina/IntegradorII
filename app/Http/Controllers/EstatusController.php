<?php

namespace App\Http\Controllers;

use App\Models\estatus;
use Illuminate\Http\Request;

class EstatusController extends Controller
{
  
    public function index()
    {
        $estatus = estatus::all();
        return view('estatus.index',compact('estatus'));
    }
    public function edit($id)
    {
        //
        $estatus = estatus::find($id);
        return view('estatus.edit')->with('estatus', $estatus);
    }

    public function create()
    {
        //
        return view('estatus.add');
    }
    public function show($id)
    {
        //
        $estatus = estatus::find($id);
      return view('estatus.show')->with('estatus',$estatus);
   
    }

    /**
     /////////////////////////////////////////////.
     */
    public function update(Request $request, $id)
    {
        //
        $estatus = estatus::findOrFail($id);
        $rules =[
          'nom_estatus'=> 'required'
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $estatus->update($input);
        return redirect('estatus')->with('message','Se ha actualizado el registro correctamente');
    }
    public function destroy($id)
    {
        //
        $estatus = estatus::find($id);

        if(is_null($estatus)){
    
            return  redirect()->route('estatus.index');
    
        }
    
        $estatus->delete();
        return redirect()->route('estatus.index');
      
    }
    public function store(Request $request)
    {
        //
        $rules =[
            'nom_estatus'=> 'required|min:1|unique:estatuses'
        ];
      
        $message = [
         'nom_estatus.required'=> 'El campo  esta vacio'
        ];
      
        $this->validate($request, $rules, $message);
        $input=$request->all();
        estatus::create($input);
        return redirect('estatus')->with('message','Se ha creado correctamente');
        
    }
}
