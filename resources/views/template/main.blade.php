<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset=UTF-8">
        <title>@yield('title','default')| Sistema Gestión Socios</title>
     
        <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('plugin/fontawesome/css/fontawesome.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ asset('plugin/img/icono.ico') }}">

    </head>

    

    <body>
     
    @include('template.partials.nav')
    <section> @yield('content') </section>
    <script src= "{{ asset('plugin/jquery/js/jquery-3.3.1.js') }}"></script> 
    <script src= "{{ asset('plugin/bootstrap/js/popper.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/jquery.ui.custom.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/jquery.uniform.js') }}"></script> 
    <script src= "{{ asset('plugin/bootstrap/js/jquery.dataTables.min.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/select2.min.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/bootstrap.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>       
    <script src= "{{ asset('plugin/bootstrap/js/popper.js') }}"></script>





    </body>

<footer>
    <div class="row-fluid">
            <div id="footer"  align="center"> 2018 © RBS Development  </div>
    </div>

</footer>

 


</html>