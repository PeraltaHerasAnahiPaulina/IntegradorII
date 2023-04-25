<?php

namespace App\Http\Controllers;
use App\Models\tipo_entrada;
use App\Models\docencia;
use App\Models\usuario;
use App\Models\historial;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
      $usuario = usuario::Select('usuarios.id','usuarios.nombre',
      'usuarios.ap',
      'usuarios.am',
      'usuarios.correo',
      'usuarios.matricula',
      'usuarios.contraseña',
      'usuarios.qr',
      'docencias.nom_docencia',
      'tipo_entradas.nom_entrada')
      ->join('docencias','docencias.id','usuarios.docencias_id')
    
      ->join('tipo_entradas','tipo_entradas.id','usuarios.tipo_entradas_id')->get();
      return view('usuario.index', compact('usuario'));
    }
    public function edit($id)
    {
      $tipo_entrada = tipo_entrada::all('id','nom_entrada');
      $docencia = docencia::all('id','nom_docencia');
   
      $usuario = usuario::find($id);
      return view('usuario.edit', compact ('usuario','docencia','tipo_entrada'));
  
    }
    public function create()
    {
        $tipo_entrada = tipo_entrada::all('id','nom_entrada');
        $docencia = docencia::all('id','nom_docencia');
     
     $usuario = usuario::all();
      return view('usuario.add', compact('usuario','docencia','tipo_entrada'));
       
    }
    public function show($id)
    {
      
      $usuario = usuario::Select('usuarios.id','usuarios.nombre',
      'usuarios.ap',
      'usuarios.am',
      'usuarios.correo',
      'usuarios.matricula',
      'usuarios.contraseña',
      'usuarios.qr',
      'docencias.nom_docencia',
      'tipo_entradas.Name_Trajectory')
      ->join('docencias','docencias.id','usuarios.docencias_id')
    
      ->join('tipo_entradas','tipo_entradas.id','usuarios.tipo_entradas_id')->find($id);
      return view('usuario.show')->with('usuario',$usuario);
   
    }
    public function update(Request $request, $id)
    {
    $usuario = usuario::find($id);
    $rules =[
      'nombre'=> 'required|min:1',
      'ap' =>'required|min:4',
      'am' =>'required|min:10',
      'correo'=> 'required|min:10',
      'matricula'=> 'required|min:9',
      'contraseña'=> 'required|min:4',
      'tipo_entradas_id' =>'required',
      'docencias_id'=> 'required'
    ];
   
    $this->validate($request, $rules);
    $input=$request->all();
    $usuario->update($input);
    return redirect('usuario')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $usuario = usuario::find($id);

        if(is_null($usuario)){

            return  redirect()->route('usuario.index');

        }

        $usuario->delete();
    return redirect()->route('usuario.index');
   }
   public function store(Request $request)
   {
    // 
    $request->validate([
        'nombre'=> 'required',
        'ap' =>'required',
        'am' =>'required',
        'correo'=> 'required',
        'matricula'=> 'required',
        'contraseña'=> 'required',
        'tipo_entradas_id' =>'required',
        'docencias_id'=> 'required'
  ]);
 
  usuario::create([
      'nombre' => $request->nombre,
      'ap' => $request->ap,
      'am' => $request->am,
      'correo' => $request->correo,
      'contraseña' => $request->contraseña,
      'matricula' => $request->matricula,
      'tipo_entradas_id' => $request->tipo_entradas_id,
      'docencias_id' => $request->docencias_id,
  ]);

  return redirect('user')->with('message','Se ha creado correctamente');

   }


public function usuario (){

  $consulta=historial::all();


  return view('home')->with('consulta',$consulta);

}


public function barras (){



}




public function lineas (){

  $consulta=historial::all();


  return view('home')->with('consulta',$consulta);

}






}
