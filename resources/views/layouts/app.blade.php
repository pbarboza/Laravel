<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!--  <title>{{ config('app.name', 'Laravel') }}</title>
 -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('plugin/css/bootstrap.css') }}">
</head>
<body>
     <div id="app">
       
            <div class="container">
                <!-- 
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'AERO CLUB') }}
                </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

               
            </div>
      
        <main class="py-4">
            @yield('content')
        </main>
    </div>  
</body>
</html>
