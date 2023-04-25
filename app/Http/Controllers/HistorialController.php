<?php

namespace App\Http\Controllers;
use App\Models\usuario;
use App\Models\historial;
use App\Models\estatus;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
   
    public function index()
    {
      $historial = historial::Select('historials.id','historials.fecha','historials.matricula',
      'historials.horaentrada',
      'usuarios.nombre',
      'estatuses.nom_estatus')
      ->join('usuarios','usuarios.id','historials.usuario_id')
      ->join('estatuses','estatuses.id','historials.estatus_id')->get();
      return view('historial.index', compact('historial'));
    }

    public function edit($id)
    { $estatus = estatus::all('id','nom_estatus');
      $usuario = usuario::all('id','nombre');
      $historial = historial::find($id);
      return view('historial.edit', compact ('historial','estatus','usuario'));
  
    }
    public function create()
    {
        $estatus = estatus::all('id','nom_estatus');
        $usuario = usuario::all('id','nombre');
      $historial = historial::all();
      return view('historial.add', compact ('historial','estatus','usuario'));
       
    }
    public function show($id)
    {
      
      $historial = historial::Select('historials.id','historials.fecha',
      'historials.horaentrada',
      'historials.horasalida',
      'usuarios.nombre',
      
      'estatuses.nom_estatus')
      ->join('usuarios','usuarios.id','historials.usuario_id')
      ->join('estatuses','estatuses.id','historials.estatus_id')->find($id);
      return view('historial.show')->with('historial',$historial);
   
    }
    public function update(Request $request, $id)
    {
    //
   
    $historial = historial::find($id);
    $rules =[
      'fecha'=> 'required|min:1',
      'matricula'=> 'required|min:9',
      'horaentrada' =>'required|min:1',
      'horasalida' =>'required|min:1',
      'estatus_id'=> 'required',
      'usuario_id' =>'required'
    ];
 
    $this->validate($request, $rules);
    $input=$request->all();
    $historial->update($input);
    return redirect('historial')->with('message','Se ha actualizado el registro correctamente');

    }
    public function destroy($id)
   {
    //
    $historial = historial::find($id);

        if(is_null($historial)){

            return  redirect()->route('historial.index');

        }

        $historial->delete();
    return redirect()->route('historial.index');
   }
   public function store(Request $request)
   {
    // 
    $request->validate([
        'fecha'=> 'required|min:1',
        'matricula'=> 'required|min:9',
        'horaentrada' =>'required|min:1',
        'horasalida' =>'required|min:1',
        'estatus_id'=> 'required',
        'usuario_id' =>'required'
  ]);
 
  historial::create([
      'fecha' => $request->fecha,
      'matricula'=>$request->matricula,
      'horaentrada' => $request->horaentrada,
      'horasalida' => $request->horasalida,
      'estatus_id' => $request->estatus_id,
      'usuario_id' => $request->usuario_id
  ]);

  return redirect('historial')->with('message','Se ha creado correctamente');

   }
}
