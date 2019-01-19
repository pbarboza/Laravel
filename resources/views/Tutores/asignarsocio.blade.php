@extends ('template.main')
@section('title','Vincular Socios')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Vincular socios para el Tutor: {{$tutor->Apellido}}, {{$tutor->Nombre}} </h4>
                    
       </div>     

                    <!-- Buscador de Socios  -->               
                        {!!Form::open (['route' => 'socios.index', 'method' =>'GET' , 'class' => 'navbar-form pull-left'])!!} 
                    <br>
                        <div class="form-group">
                          {!! Form::text ('Apellido',null,['class'=>'form-control', 'placeholder'=>'Buscar Socio por Apellido','aria-describedby' => 'search']) !!}
                        </div>

                    {!!Form::close()!!} 

                    <!-- Fin Buscador de Socios -->

        <br>

 @if (Session::has('message'))
              <p>
              <div class="alert alert-success"> {{ Session::get('message')}}
                <button class="close" data-dismiss="alert">×</button>
              </div>
             
    @endif 
         
          <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th style="text-align:center">Seleccionar</th>
                </tr>
              </thead>
            <tbody>
              <tr class="gradeX">
              @foreach($socios as $socio)
                  <td>{{$socio->idSocio}}</td>
                  <td>{{$socio->Apellido}}</td>
                  <td>{{$socio->Nombre}}</td>
                  <td style="text-align:center"> <input type="radio" name="socio_seleccionado" /></td>
                      
                </tr>

               @endforeach
              </tbody>
          </table>  
  {{$socios->links()}}
</div>

@endsection





