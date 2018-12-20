<nav class="navbar navbar-expand-lg navbar-light bg-light" back>

<a class="navbar-brand" href="#">
    <img src="/plugin/img/icono.ico" width="30" height="30" alt="">
  </a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="socios">Socios <span class="sr-only">(current)</span></a>
      </li>
     

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Informes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-file-alt"></i> Listado Socios</a>
          <a class="dropdown-item" href="#"><i class="fas fa-file-alt"></i> Socios Morosos</a>
         </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configuraciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="documentacion"> <i class="fas fa-id-card"></i> Documentacion</a>
          <a class="dropdown-item" href="#"><i class="fas fa-award"></i> Prestaciones</a>
            <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Perfiles de Socios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('club.edit',1)}}"><i class="fas fa-hotel"></i> Datos del Club</a>
        </div>
      </li>
      
       
      <li class="nav-item active">
        <a class="nav-link" href="usuario">Usuarios <span class="sr-only"></span></a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout')}}"> 
      <h8 style="justify-content: right; white-space: pre">Bienvenido {{auth()->user()->name}} </h8>
     
      {{ csrf_field() }}
        <button class="btn btn-danger btn-xs">Cerrar sesión</button>
    </form>
  </div>
</nav>