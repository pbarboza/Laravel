<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset=UTF-8">
        <title>@yield('title','default')| Sistema Gestión Socios</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <!-- <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('plugin/fontawesome/css/fontawesome.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ asset('plugin/img/icono.ico') }}">

    </head>

    

    <body>
     
    @include('template.partials.nav')
    <section> @yield('content') </section>
   
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


   <!--  
    <script src= "{{ asset('plugin/jquery/js/jquery-3.3.1.js') }}"></script> 
    <script src= "{{ asset('plugin/bootstrap/js/jquery.ui.custom.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/jquery.uniform.js') }}"></script> 
    <script src= "{{ asset('plugin/bootstrap/js/jquery.dataTables.min.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/select2.min.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/bootstrap.js') }}"></script>
    <script src= "{{ asset('plugin/bootstrap/js/bootstrap.min.js') }}"></script>       
    <script src= "{{ asset('plugin/bootstrap/js/popper.js') }}"></script> -->





    </body>

<footer>
    <div class="row-fluid">
            <div id="footer"  align="center"> 2018 © RBS Development  </div>
    </div>

</footer>

 


</html>