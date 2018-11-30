<!DOCTYPE html>
<!-- saved from url=(0096)file:///C:/Users/savoy/Documents/AERO/matrix-admin-package-full/matriz-admin-old/HTML/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>AERO CLUB RUGBY</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="plugin/css/bootstrap.min.css" />
<link rel="stylesheet" href="plugin/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="plugin/css/uniform.css" />
<link rel="stylesheet" href="plugin/css/select2.css" />
<link rel="stylesheet" href="plugin/css/matrix-style.css" />
<link rel="stylesheet" href="plugin/css/matrix-media.css" />
<link href="plugin/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="file:///C:/Users/savoy/Documents/AERO/matrix-admin-package-full/matriz-admin-old/HTML/dashboard.html"></a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav" style="width: auto; margin: 0px;">
   
   <li class=""><a title="Hacer click para cerrar sesión" href="/"> <i class="icon icon-share-alt"></i> <span class="text">Cerrar Sesión</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i>Inicio</a>
  <ul style="display: block;">
    <li class="active"> <a href="/socios"><i class="icon icon-group"></i> <span>Socios</span></a> </li>
    <li> <a href=""><i class="icon icon-money"></i> <span>Recibos</span></a> </li>
    <li> <a href=""><i class="icon icon-file"></i> <span>Informes</span></a> </li>
    <li class="submenu"> <a href="#"> <i class="icon icon-cog"></i>
      <span>Configuración</span> <span class="badge badge-inverse">3</span></a>
      <ul>
        <li><a href="#"> <i class="icon icon-file"></i> Documentación</a></li>
        <li><a href="#"> <i class="icon icon-gift"></i> Prestaciones</a></li>
        <li><a href="#"> <i class="icon icon-eye-open"></i> Perfiles de Socios</a> </li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"> <i class="icon icon-user"></i>
        <span>Usuarios</span> <span class="badge badge-inverse">2</span></a>
      <ul>
        <li> <a href="/usuario"><i class="icon icon-list"></i> <span>Usuarios</span></a> </li>
        <li><a href="#"> <i class="icon icon-eye-open"></i> Perfiles de Usuarios</a> </li>
      </ul>
    </li>
    </ul>
</div>
<!--sidebar-menu-->


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="/index" class="tip-bottom" data-original-title="Ir al inicio"><i class="icon-home"></i> Inicio</a><a href="/socios" class="current">Socios</a> </div>
    <h1><i class="icon icon-group"></i> SOCIOS</h1>
     <div id="search"> <a href="{{route('socios.create')}}"</a> <button class="btn btn-info btn-large"><i class="icon icon-plus"></i> Nuevo Socio </button> </div>
  </div>
    @if (Session::has('message'))
              <p>
              <div class="alert alert-success"> {{ Session::get('message')}}
                <button class="close" data-dismiss="alert">×</button>
              </div>
             
    @endif  
  <a href="javascript:void(0);"</a>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
           
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Listado de Socios</h5>
          </div>
          <div class="widget-content nopadding">
         
             <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th class="center">DNI</th>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th>Fecha Nacimiento</th>
                  <th>Acciones</th>
                </tr>
              </thead>
            <tbody>
              <tr class="gradeX">
              @foreach($socios as $socio)
                  <td>{{$socio->idSocio}}</td>
                  <td>{{$socio->Apellido}}</td>
                  <td>{{$socio->Nombre}}</td>
                  <td>{{$socio->FechaNacimiento}}</td>                
                  <td>
                    <div class="center" class="btn-group center"><a class="btn btn-default" title="Acciones" data-toggle="dropdown" href="javascript:void(0);"><i class="icon icon-cog"></i></a>
                      <ul class="dropdown-menu" style="left:auto; right:auto; top:auto">
                        <li><a href="javascript:void(0);" class="actionEditItem" data-module="empresas" data-id="348"> <i class="icon-pencil"></i> Modificar</a></li>
                        <li><a href="javascript:void(0);" class="actionEditItem" data-module="empresas" data-id="348"><i class="icon-user-md"></i>Tutores</a></li>
                        <li><a href="javascript:void(0);" class="actionEditItem" data-module="empresas" data-id="348"><i class="icon-copy"></i>Documentación</a></li>
                        <li><a href="javascript:void(0);" class="actionPlantillas" data-module="empresas" data-id="348"><i class="icon icon-money"></i>Emitir Recibos</a></li>
                        <li><a href=""  class="" data-module="empresas" data-id="348"><i class="icon-trash"></i>Eliminar</a></li>
                      </ul>
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


<div class="row-fluid">
  <div id="footer" class="span12"> 2018 © RBS Development  </div>
</div>



<script src="plugin/js/jquery.min.js"></script> 
<script src="plugin/js/jquery.ui.custom.js"></script> 
<script src="plugin/js/bootstrap.min.js"></script> 
<script src="plugin/js/jquery.uniform.js"></script> 
<script src="plugin/js/select2.min.js"></script> 
<script src="plugin/js/jquery.dataTables.min.js"></script> 
<script src="plugin/js/matrix.js"></script> 
<script src="plugin/js/matrix.tables.js"></script>


</body>
</html>
