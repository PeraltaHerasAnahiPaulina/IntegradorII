@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">historial Editar</h1>
</div>






<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar registro_e_s</h6>
            </div>
            <div class="card-body">
                <form action="{{url('historial/' .$historial->id) }}" method="post" >
                    {!! csrf_field() !!}
                    @method("PATCH")
                   <label > fecha </label>
                    <input class="form-control" type="date"  name="fecha">
                    @error('fecha')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > Matricula </label>
                    <input class="form-control" type="double"  name="matricula">
                    @error('matricula')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                    <label > horaentrada </label>
                    <input class="form-control" type="date"  name="horaentrada">
                    @error('horaentrada')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > horasalida </label>
                    <input class="form-control" type="date"  name="horasalida">
                    @error('horasalida')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    
                    <label for=""> estatus:</label>
                    
                    <select class="form-control form-select" aria-label="Default select example" name="estatus_id" required data-live-search="true">
                        <option value="">Elige el estatus</option>
                        @foreach($estatus as $estatus)  
                        <option value={{$estatus->id}}>{{$estatus->nom_estatus}}</option>
                           @endforeach
                        </select>
                    
                    <label for=""> users:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="users_id" required data-live-search="true" >
                            <option value="">Elija </option>
                            @foreach($usuario as $usuario)  
                            <option value={{$usuario->id}}>{{$usuario->nombre}}</option>
                               @endforeach
                            </select>
                        <div class="row">
                        <a class="btn btn-danger m-3"  href="/historial" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3" value="update">Aceptar</button>
                       
                    </div>
                </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')