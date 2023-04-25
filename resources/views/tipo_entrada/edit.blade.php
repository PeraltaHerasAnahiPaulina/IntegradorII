@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Entrada  editar</h1>
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
                <form action="{{url('tipo_entrada/' .$tipo_entrada->id) }}" method="post" >
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label> nom_entrada:</label>
                    <input class="form-control" type="text" name="nom_entrada" id="nom_entrada"  value="{{$tipo_entrada->nom_entrada}}" required >
                    @error('nom_entrada')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                        <label for=""> entrada_estacionamientos_id :</label>
                <select class="form-control form-select" aria-label="Default select example" id="entrada_estacionamientos_id" name="entrada_estacionamientos_id" value="{{$tipo_entrada->entrada_estacionamientos_id}}" >
                    <option value=>Elige el Cuatrimestre</option>
                        @foreach($entrada_estacionamiento as $entrada_estacionamiento)
                    <option value={{$entrada_estacionamiento->id}}>{{$entrada_estacionamiento->matricula_auto}}</option>
                       @endforeach
                    </select >

               
                        <div class="row">
                        <a class="btn btn-danger m-3"  href="/tipo_entrada" >Cancelar</a>
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
