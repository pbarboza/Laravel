@extends ('template.main')
@section('title',' Tutores')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Listado de Tutores</h4>
                    <div class="button" align="right">
                    <a href="{{route('tutores.create')}}" <button type="button" class="btn btn-primary btn-small"   align="right"> <i class="fas fa-user-plus"></i> Nuevo Tutor</button></a>
                    </div>
       </div>     

                    <!-- Buscador de Tutores-->
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
                  <th class="center">DNI</th>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Celular</th>
                  <th>Domicilio</th>
                  <th>Acciones</th>
                </tr>
              </thead>
            <tbody>
              <tr class="gradeX">
              @foreach($tutores as $tutor)
                  <td>{{$tutor->idTutor}}</td>
                  <td>{{$tutor->Apellido}}</td>
                  <td>{{$tutor->Nombre}}</td>
                  <td>{{$tutor->Telefono}}</td>     
                  <td>{{$tutor->Domicilio}}</td>  
                  <td>{{$tutor->Celular}}</td>               
                   <td>
                      <div class="dropdown" align="center">
                       <button class="btn btn-secondary dropdown-toggle"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > <i class="fas fa-cog"></i>
                       </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a href=""><button class="dropdown-item" type="button" > <i class="fas fa-user-edit"></i> Modificar</button></a>
                            <a href=""><button class="dropdown-item" type="button"> <i class="fas fa-user-tie"></i> Vincular Socio</button> </a>
                            <a href=""> <button class="dropdown-item" type="button"> <i class="fas fa-user-times"></i> Eliminar</button></a>
                          </div>
                      </div>
                  </td> 
                      
                </tr>

               @endforeach
              </tbody>
          </table>  
  {{$tutores->links()}}
</div>

@endsection





