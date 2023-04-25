@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Altas</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Alta</h6>
            </div>
            <div class="card-body">
                
            <form action="{{ url('carrera') }}" method="post" >
                @csrf
                @include('components.flash_alerts') 
                <label for=""> nom_carrera:</label>
                <input class="form-control" type="Text" value="" name="nom_carrera" required="required">
                @error('nom_carrera')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
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