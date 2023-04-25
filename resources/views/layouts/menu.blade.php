@yield('menu')
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
   
   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
       <div class="sidebar-brand-icon rotate-n-15">
           <i class="fa-solid fa-qrcode"></i>
       </div>
       <div class="sidebar-brand-text mx-3">CuevoQR<sup>.</sup></div>
       <div class="sidebar-brand-text mx-3"><sup>Un ingreso seguro</sup></div>
   </a>
   
   <!-- <i class="fa-regular fa-qrcode"></i>Divider -->
   <hr class="sidebar-divider my-0">
   
   <!-- Nav Item - Dashboard -->
     <!-- <li class="nav-item active">
       <a class="nav-link" href="/">
       <i class="fa-solid fa-house"></i>        
       <span>Inicio</span></a>
   </li>
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active3">
       <a class="nav-link" href="/carrera">
        <i class="fa-light fa-screen-users"></i>
       <span>Carrera</span></a>
   </li>
   <li class="nav-item active1">
       <a class="nav-link" href="/docencia">
        <i class="fa-regular fa-school"></i>
       <span>Docencia</span></a>
   </li>
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active2">
       <a class="nav-link" href="/entrada_estacionamiento">
        <i class="fa-regular fa-square-parking"></i>
       <span>EntradaEsatacionamiento</span></a>
   </li>
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active3">
       <a class="nav-link" href="/estatus">
        <i class="fa-solid fa-cassette-tape"></i>
       <span>Estatus</span></a>
   </li>
   <!-- Nav Item - Dashboard -->
  <li class="nav-item active2">
       <a class="nav-link" href="/historial">
        <i class="fa-regular fa-clipboard"></i>
       <span>Historial</span></a>
   </li>
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active3">
       <a class="nav-link" href="/tipo_entrada">
        <i class="fa-solid fa-gopuram"></i>
       <span>Tipo entrada</span></a>
   </li>

   <li class="nav-item active3">
    <a class="nav-link" href="/tipo_vehiculo">
        <i class="fa-solid fa-car"></i>
    <span>Tipo vehiculo</span></a>
</li>

<li class="nav-item active3">
    <a class="nav-link" href="/user">
        <i class="fa-solid fa-user"></i>
    <span>Usuarios</span></a>
</li>
   
   
   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">
   
   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
       <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>
   </ul>
   <!-- End of Sidebar -->
   
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
   
   <!-- Main Content -->
   <div id="content">
   
       <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
   
           <!-- Sidebar Toggle (Topbar) -->
           <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
               <i class="fa fa-bars"></i>
           </button>
   
         
                   <!-- Dropdown - User Information -->
                   <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                       aria-labelledby="userDropdown">
                       <a class="dropdown-item" href="#">
                           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                           Profile
                       </a>
                       <a class="dropdown-item" href="#">
                           <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                           Settings
                       </a>
                       <a class="dropdown-item" href="#">
                           <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                           Activity Log
                       </a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                       </a>
                   </div>
               </li>
   
           </ul>
   
       </nav>
       <!-- End of Topbar -->