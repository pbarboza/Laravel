<!DOCTYPE html>
<html lang="es">
    
 <head>
        <meta charset=UTF-8">
        <title>@yield('title','Login ')| Sistema Gestión Socios</title>
        <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('plugin/fontawesome/css/fontawesome.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


        <link rel="shortcut icon" href="{{ asset('plugin/img/icono.ico') }}">

    </head>
    <body background="plugin/img/Rugby.jpg"> 
    <br><br><br><br> <br><br>

 

<div class="row justify-content-center">
   <div class="col-md-4">
    @if (session()->has('flash'))
        <div class="alert alert-info">{{session('flash')}}</div>
    @endif
        <div class="card card-primary">
             <div class="card-header">
                <h3 style="text-align: center" class="card-title">Acceso al Sistema</h3>
             </div>    
                
            <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input class="form-control" 
                                        type="text"                 
                                        name="usuario"                                     
                                        placeholder="Ingrese el nombre de usuario">
                                        {!! $errors->first('usuario','<span style="color:#FF0000" class="help-block">:message</span>')!!}
                        </div>

                         <div class="form-group">
                            <label for="password">Clave</label>
                            <input class="form-control" 
                                        type="password"                 
                                        name="password"                                     
                                        placeholder="Ingrese su clave">
                                         {!! $errors->first('password','<span style="color:#FF0000" class="help-block" >:message</span>')!!}
                         </div>
                            

                      <button class="btn btn-primary btn-block">Ingresar</button>
                    </form>
                </div> 
         </div>
    </div>
</div>

</body>

</html>
