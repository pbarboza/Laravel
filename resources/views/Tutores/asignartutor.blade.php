@extends ('template.main')
@section('title','Asignar Tutor')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Seleccionar Tutor para el socio: {{$socio->Apellido}}, {{$socio->Nombre}} </h4>
                    
       </div>     

                    <!-- Buscador de Tutores  -->               
                        {!!Form::open (['route' => 'tutores.index', 'method' =>'GET' , 'class' => 'navbar-form pull-left'])!!} 
                    <br>
                        <div class="form-group">
                          {!! Form::text ('Apellido',null,['class'=>'form-control', 'placeholder'=>'Buscar Tutor','aria-describedby' => 'search']) !!}
                        </div>

                    {!!Form::close()!!} 

                    <!-- Fin Buscador de Tutores -->

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
                  <th style="text-align:right">Asignar</th>
                </tr>
              </thead>
            <tbody>
              <tr class="gradeX">
              @foreach($tutores as $tutor)
                  <td>{{$tutor->idTutor}}</td>
                  <td>{{$tutor->Apellido}}</td>
                  <td>{{$tutor->Nombre}}</td>
                  <td>
                    <div class="button" align="right">
                    <a href="{{route('socios.updateTutor',array($socio->idSocio,$tutor->idTutor))}}" onclick="return confirm('¿Seguro que deseas Seleccionar el Tutor {{$tutor->Apellido}} ?')"> <button type="button" class="btn btn-primary btn-small"   align="right"></i>Seleccionar</button></a>
                    </div>
                  </td> 
                      
                </tr>

               @endforeach
              </tbody>
          </table>  
  {{$tutores->links()}}
</div>

@endsection





