@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">historial Información</h1>
        
    </div>
    
    
    <!-- Content Row -->
    
    
    
    <!-- Content Row -->
    <div class="row">
    
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
    
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User</h6>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> id: {{ $historials->id }}</h5>
                 <h5 class="card-title"> fecha: {{ $historials->fecha }}</h5>
                 <h5 class="card-title"> Matricula: {{ $historials->matricula }}</h5>
                 <h5 class="card-title"> horaentrada: {{ $historials->horaentrada }}</h5>
                 <h5 class="card-title"> hosasalida: {{ $historials->horasalida }}</h5>
                   <h5 class="card-title"> estatus: {{ $historials->estatus }}</h5>
                 <h5 class="card-title"> users: {{ $historial->usuario}}</h5>
                 <a class="btn btn-outline-success m-3" href="/historial" ><i class="fa-solid fa-arrow-left"></i></a>
                </div>
           
        </div>
      
    </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@include('layouts.footer')