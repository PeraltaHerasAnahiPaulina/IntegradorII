@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Infromacion de tipo estacionamiento</h1>
        
    </div>
    
    
    <!-- Content Row -->
    
    
    
    <!-- Content Row -->
    <div class="row">
    
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
    
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Entrada_estacionamiento</h6>
                </div>
                <div class="card-body">
                 <h5 class="card-title"> Matricula_auto: {{ $entrada_estacionamiento->matricula_auto }}</h5>
                 <h5 class="card-title"> Modelo: {{ $entrada_estacionamiento->modelo }}</h5>
                <h5 class="card-title"> Tipo_de_vehiculo: {{ $entrada_estacionamiento->tipo_vehiculo }}</h5>
                 <a class="btn btn-outline-success m-3" href="/entrada_estacionamiento" ><i class="fa-solid fa-arrow-left"></i></a>
                </div>
           
        </div>
      
    </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@include('layouts.footer')