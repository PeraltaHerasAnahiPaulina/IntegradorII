@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User Editar</h1>
</div>






<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar User</h6>
            </div>
            <div class="card-body">
                <form action="{{url('User/' .$User->id) }}" method="post" >
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label> Nombre:</label>
                    <input class="form-control" type="text" name="Name" id="nombre"  value="{{$usuario->nombre}}" required >
                    @error('nombre')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Apellido apterno:</label>
                    <input class="form-control" type="text" name="Name" id="ap"  value="{{$usuario->ap}}" required >
                    @error('ap')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Apellido materno:</label>
                    <input class="form-control" type="text" name="Name" id="am"  value="{{$usuario->am}}" required >
                    @error('am')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Email:</label>
                    <input class="form-control" type="Email" name="Email" id="correo" value="{{$usuario->correo}}">
                    @error('correo')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Matricula:</label>
                    <input class="form-control" type="number" name="Matricula" id="matricula" value="{{$usuario->matricula}}" required>
                    @error('matricula')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Password:</label>
                        <input class="form-control" type="Password" name="Password" id="contraseña" value="{{$usuario->contraseña}}">
                        @error('contraseña')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror 
                    {{-- <!--  <h5 class="card-title"> Img de usuario:<img src="{{asset('storage/'.$User->Img_User)}}" alt="Imagen Usuario" width="150" height="200"></h5>--> --}}
                    <label> QR:</label>
                    <input class="form-control" type="" name="" id="qr" value="{{$usuario->qr}}">
                    @error('qr')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                 <label for=""> Entrada :</label>
                <select class="form-control form-select" aria-label="Default select example" id="tipo_entradas_id" name="tipo_entradas_id" value="{{$usuario->tipo_entradas_id}}" >
                    <option value=>Elige el Cuatrimestre</option>
                        @foreach($tipo_entrada as $tipo_entrada)
                    <option value={{$tipo_entrada->id}}>{{$tipo_entrada->nom_entrada}}</option>
                       @endforeach
                    </select >

                    <label for=""> Docencia :</label>
                <select class="form-control form-select" aria-label="Default select example" id="docencias_id" name="docencias_id" value="{{$usuario->docencias_id}}" required>
                    <option value="">Elija la direccion</option>
                        @foreach($docencia as $docencia)
                    <option value={{$docencia->id}}>{{$docencia->nom_docencia}}</option>
                       @endforeach
                    </select>

        

                        <div class="row">
                        <a class="btn btn-danger m-3"  href="/usuario" >Cancelar</a>
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
