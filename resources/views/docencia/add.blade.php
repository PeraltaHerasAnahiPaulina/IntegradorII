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


<!-- Content Rowdocencia-->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Docencia Alta</h6>
            </div>
            <div class="card-body">
                
                <form action="{{ url('docencia') }}"  enctype="multipart/form-data" method="post">
                  {!! csrf_field() !!}
                    @include('components.flash_alerts') 
                    <label > Nombre docencia </label>
                    <input class="form-control" type="text"  name="nom_docencia" id="nom_docencia" value="{{old('nom_docencia')}}" >
                    @error('nom_docencia')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Elija la carrera:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="carrera_id" required data-live-search="true">
                        <option selected>Elija la carrera</option>
                        @foreach($carrera as $carrera)  
                        <option value={{$carrera->id}}>{{$carrera->nom_carrera}}</option>
                           @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary m-3"  value="save">Aceptar</button>
                        <div class="row">
                         
        </div>
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
