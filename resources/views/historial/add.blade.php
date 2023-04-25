@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Altas</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Acount Alta</h6>
            </div>
            <div class="card-body">
                
                <form action="{{ url('historial') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @include('components.flash_alerts') 
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
                    <select class="form-control form-select" aria-label="Default select example" name="usuario_id" required data-live-search="true" >
                            <option value="">Elija la direccion</option>
                            @foreach($usuario as $usuario)  
                            <option value={{$usuario->id}}>{{$usuario->nombre}}</option>
                               @endforeach
                            </select> 
                    <div class="row">
                        <button type="submit" class="btn btn-primary m-3">Aceptar</button>
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
