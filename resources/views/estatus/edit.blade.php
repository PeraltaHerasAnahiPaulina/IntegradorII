@include('layouts.header')
@include('layouts.menu')

@section('header')

@endsection

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar</h1>
     
    </div>
    
    
    <!-- Content Row -->
    
    
    
    <!-- Content Row -->
    <div class="row">
    
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
    
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Editar </h6>
                </div>
                <div class="card-body">
                    
                    <form action="{{url('estatus/' .$estatus->id) }}" method="post">
                        {!! csrf_field() !!}
                        @include('components.flash_alerts') 
                        @method("PATCH")
                        <label> Estatus:</label>
                                                                                         <!--  -->
                        <input class="form-control" type="text" name="nom_estatus" id="nom_estatus"  value="{{$estatus->nom_estatus}}">
                        @error('nom_estatus')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror 

                            <div class="row">                  <!--  -->
                            <a class="btn btn-danger m-3"  href="/estatus" >Cancelar</a>
                            <button type="submit" class="btn btn-primary m-3" value="update">Aceptar</button>
                        </div>
    
                    </form>
                </div>
            </div>
    
           
    
        </div>
    
      
    </div>
    
    </div>
    <!--  -->
    
    </div>
    <!-- End of Main Content -->
    



@include('layouts.footer')