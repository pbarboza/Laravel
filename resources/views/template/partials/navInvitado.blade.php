<nav class="navbar navbar-expand-lg navbar-light bg-light" back>

<a class="navbar-brand" href="#">
    <img src="/plugin/img/icono.ico" width="30" height="30" alt="">
  </a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Socios <span class="sr-only">(current)</span></a>
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

          
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <h8 style="justify-content: right">Bienvenido {{auth()->user()->name}}</h8>
        <a class="nav-link" href="#"><i class="fas fa-times-circle"></i> Cerrar Sesión</a> 
    </form>
  </div>
</nav>