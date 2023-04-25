@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar entrada estacionamiento</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar</h6>
            </div>
            <div class="card-body">
                
                <form action="{{url('entrada_estacionamiento/' .$entrada_estacionamiento->id) }}"  enctype="multipart/form-data" method="post">
                    {!! csrf_field() !!}
                    @include('components.flash_alerts') 
                    @method("PATCH")
                    <label> Matricula_auto:</label>
                    <input class="form-control" type="text" name="matricula_auto" id="matricula_auto"  value="{{$entrada_estacionamiento->matricula_auto}}">
                    @error('matricula_auto')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Modelo:</label>
                    <input class="form-control" type="text" name="modelo" id="modelo"  value="{{$entrada_estacionamiento->modelo}}">
                    @error('modelo')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Tipo_de_vehiculo :</label>
                            <select class="form-control form-select" aria-label="Default select example" id="tipo_vehiculo_id" name="tipo_vehiculo_id" value="{{$entrada_estacionamiento->tipo_vehiculo_id}}">
                                <option selected></option>
                                    @foreach($tipo_vehiculo as $tipo_vehiculo)
                                <option value={{$tipo_vehiculo->id}}>{{$tipo_vehiculo->nom_tipo_vehiculo}}</option>
                                   @endforeach
                                </select>
                                <a class="btn btn-danger m-3"  href="/entrada_estacionamiento" >Cancelar</a>
                                <button type="submit" class="btn btn-primary m-3" value="update"data-toggle="modal" data-target="#exampleModal">Aceptar</button>
                       
                        
                        <div class="row">

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
