@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Agrega un tipo de entrada>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tipo entrada </h6>
            </div>
            <div class="card-body">
                
                <form action="{{ url('tipo_entrada') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @include('components.flash_alerts') 
                    <label > Nombre entrda </label>
                    <input class="form-control" type="text"  name="nom_entrada">
                    @error('nom_entrada')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 

                     <label for=""> Entrada estacionamiento:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="entrada_estacionamientos_id"  data-live-search="true">
                             <option value="">Elija  </option>
                             @foreach($entrada_estacionamiento as $entrada_estacionamiento)  
                             <option value={{$entrada_estacionamiento->id }}>{{$entrada_estacionamiento->matricula_auto}}</option>
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