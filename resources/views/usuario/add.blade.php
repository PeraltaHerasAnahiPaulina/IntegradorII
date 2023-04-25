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
                
                <form action="{{ url('user') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @include('components.flash_alerts') 
                    <label > Name </label>
                    <input class="form-control" type="text"  name="nombre">
                    @error('nombre')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > Apellido paterno </label>
                    <input class="form-control" type="text"  name="ap">
                    @error('ap')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > Apellido materno </label>
                    <input class="form-control" type="text"  name="am">
                    @error('am')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > Email </label>
                    <input class="form-control" type="Email"  name="correo">
                    @error('correo')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Matricula:</label>
                    <input class="form-control" type="number" name="matricula">
                    @error('matricula')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > Password </label>
                    <input class="form-control" type="Password"  name="contraseña">
                    @error('contraseña')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Img_User:</label>
                    <input class="form-control" type="file" name="qr" required>
                    @error('qr')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
      
                    
                    <label for=""> Entrada:</label>
                    
                    <select class="form-control form-select" aria-label="Default select example" name="tipo_entradas_id" required data-live-search="true">
                        <option value="">Elige la entrada</option>
                        @foreach($tipo_entrada as $tipo_entrada)  
                        <option value={{$tipo_entrada->id}}>{{$tipo_entrada->nom_entrada}}</option>
                           @endforeach
                        </select>
                    
                    <label for=""> Docencia:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="docencias_id" required data-live-search="true" >
                            <option value="">Elija la direccion</option>
                            @foreach($docencia as $docencia)  
                            <option value={{$docencia->id}}>{{$docencia->nom_docencia}}</option>
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
