@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

@if(Session::has('message'))
<h6 class="alert alert-success">{{
Session::get('message')}}
</h6>
@endif



<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Info del Usuarios</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/user">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista de Usuarios</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="user/create"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" >
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido paterno</th>
                                            <th>Apellido materno</th>
                                            <th>Correo</th>
                                            <th>Matricula</th>
                                            <th>QR</th>
                                            <th>tipo_entradas</th>
                                            <th>docencias</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido paterno</th>
                                            <th>Apellido materno</th>
                                            <th>Correo</th>
                                            <th>Matricula</th>
                                            <th>QR</th>
                                            <th>tipo_entradas</th>
                                            <th>docencias</th>
                                            <th>Acciones</th>
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($usuario as $usuario)
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->nombre}}</td>
                                           <td>{{$usuario->ap}}</td>
                                            <td>{{$usuario->am}}</td>
                                            <td>{{$usuario->correo}}</td>
                                            <td>{{$usuario->matricula}}</td>
                                            <td>{{$usuario->qr}}</td>
                                            <td>{{$usuario->nom_entrada}}</td>
                                            <td>{{$usuario->nom_docencia}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <a class="btn btn-outline-info" href="user /{{$usuario->id}}" ><i class="fa-regular fa-eye"></i></a>
                                                    <a class="btn btn-outline-warning" href="user /{{$usuario->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter{{$usuario->id}}"><i class="fa-solid fa-trash"></i></a>
                                                 
                                                   
                                                      <!------ ESTE ES EL MODAL QUE SE MUESTRA AL DAR CLICK EN EL BOTON "ELIMINAR" ------>
            <div class="modal fade" id="exampleModalCenter{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Está seguro(a) de eliminar el usuario {{$usuario->id}}?</p>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary btn-default" data-dismiss="modal">Cancelar</button>
                            <form action="user /{{$usuario->id}}" method="POST">
                                {!! csrf_field() !!}
                                @method("delete")
                                    
                                <button class="btn btn-danger m-3" type="submit">Aceptar</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div><!--fin modal-->
                                        </div>            
                                            </td>
                                        </tr> 
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.footer')
