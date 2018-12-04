<!DOCTYPE html>
<!-- saved from url=(0096)file:///C:/Users/savoy/Documents/AERO/matrix-admin-package-full/matriz-admin-old/HTML/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>AERO CLUB RUGBY</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/plugin/index_files/bootstrap.min.css">
<link rel="stylesheet" href="/plugin/index_files/bootstrap-responsive.min.css">
<link rel="stylesheet" href="/plugin/css/uniform.css" />
<link rel="stylesheet" href="/plugin/css/select2.css" />
<link rel="stylesheet" href="/plugin/index_files/fullcalendar.css">
<link rel="stylesheet" href="/plugin/index_files/matrix-style.css">
<link rel="stylesheet" href="/plugin/index_files/matrix-media.css">
<link rel="stylesheet" href="/plugin/css/colorpicker.css" />
<link rel="stylesheet" href="/plugin/css/datepicker.css" />
<link href="/plugin/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="/plugin/index_files/jquery.gritter.css">
<link href="/plugin/index_files/css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>


</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
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
    <li> <a href="/socios"><i class="icon icon-group"></i> <span>Socios</span></a> </li>
    <li> <a href=""><i class="icon icon-money"></i> <span>Recibos</span></a> </li>
    <li> <a href=""><i class="icon icon-file"></i> <span>Informes</span></a> </li>
     <li class="submenu"> <a href="#"> <i class="icon icon-cog"></i>
      <span>Configuración</span> <span class="label label-info">3</span></a>
      <ul>
        <li><a href="#"> <i class="icon icon-file"></i> Documentación</a></li>
        <li><a href="#"> <i class="icon icon-gift"></i> Prestaciones</a></li>
        <li><a href="#"> <i class="icon icon-eye-open"></i> Perfiles de Socios</a> </li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"> <i class="icon icon-user"></i>
        <span>Usuarios</span> <span class="label label-info">2</span></a>
      <ul>
        <li class="active"> <a href="/usuario"><i class="icon icon-list"></i> <span>Usuarios</span></a> </li>
        <li><a href="#"> <i class="icon icon-eye-open"></i> Perfiles de Usuarios</a> </li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->


<div id="content">
  <div id="content-header">
   <div id="breadcrumb"><a href="/index" class="tip-bottom" data-original-title="Ir al inicio"><i class="icon-home"></i> Inicio</a> <a href="/usuario" class="tip-bottom" data-original-title="Ir al listado de usuarios"></i> Usuarios</a><a href="/editarusuario" class="current"> Editar Usuario</a> </div>
    <h1><i class="icon icon-edit"></i> EDITAR USUARIO</h1>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon icon-list"> <i class="icon-aling-justify"></i> </span>
            <h5>Datos del Usuario</h5>
          </div>
          <div class="widget-content nopadding">
      {!!Form::open (['route' => ['usuario.update',$usuario], 'method' =>'PUT' , 'class' => 'form-horizontal'])!!} 

              <div class="control-group">
                <label class="control-label">Apellido</label>
                <div class="controls">
                  <input type="text" value="{{$usuario->Apellido }}" name="Apellido" id="Apellido" class="span7">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Nombre</label>
                <div class="controls">
                  <input type="text" value="{{$usuario->Nombre}}" name="Nombre" id="Nombre" class="span7">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Usuario</label>
                <div class="controls">
                  <input type="text" value="{{$usuario->Usuario}}" name="Usuario" id="Usuario" class="span7">
                </div>
              </div>

              <div class="control-group">
              <label class="control-label">Contraseña</label>
              <div class="controls">
                  <input type="password" value="{{$usuario->Pass}}" name="Pass" id="Pass" class="span7">
              </div>  
             

            <div class="form-actions">
                     
                     {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                     <a href="/usuario"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row-fluid">
  <div id="footer" class="span12"> 2018 © RBS Development  </div>
</div>


<script src="/plugin/js/jquery.min.js"></script> 
<script src="/plugin/js/jquery.ui.custom.js"></script> 
<script src="/plugin/js/bootstrap.min.js"></script> 
<script src="/plugin/js/bootstrap-colorpicker.js"></script> 
<script src="/plugin/js/bootstrap-datepicker.js"></script> 
<script src="/plugin/js/jquery.toggle.buttons.js"></script> 
<script src="/plugin/js/masked.js"></script> 
<script src="/plugin/js/jquery.uniform.js"></script> 
<script src="/plugin/js/select2.min.js"></script> 
<script src="/plugin/js/matrix.js"></script> 
<script src="/plugin/js/matrix.form_common.js"></script> 
<script src="/plugin/js/wysihtml5-0.3.0.js"></script> 
<script src="/plugin/js/jquery.peity.min.js"></script> 
<script src="/plugin/js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>


</body>
</html>




