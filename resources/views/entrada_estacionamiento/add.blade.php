@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Driver Altas</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Entrada al aestacionamiento Alta</h6>
            </div>
            <div class="card-body">
                
                <form action="{{ url('entrada_estacionamiento') }}"  method="post">
                  {{csrf_field()}}
                    @include('components.flash_alerts') 
                    <label > Matricula_auto </label>
                    <input class="form-control" type="text"  name="matricula_auto" id="matricula_auto" value="{{old('matricula_auto')}}" >
                    @error('Matricula_auto')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Modelo:</label>
                    <input class="form-control" type="text" name="modelo" id="modelo" value="{{old('modelo')}}" >
                    @error('Modelo')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Tipo_de_vehiculo:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="tipo_vehiculo_id" id="tipo_vehiculo_id" value="{{old('tipo_vehiculo_id')}}">
                        <option selected>Elija su tipo de vehiculo</option>
                        @foreach($tipo_vehiculo as $tipo_vehiculo)  
                        <option value={{$tipo_vehiculo->id}}>{{$tipo_vehiculo->nom_tipo_vehiculo}}</option>
                           @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary m-3"  value="save">Aceptar</button>
                        <div class="row">
                         
        </div>
                </form>
            </div>
        </div>
     </div>
    
    
    
    
    
    <!-- end nodal  -->
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')
