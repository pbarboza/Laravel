@extends ('template.main')
@section('title',' Socios')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Listado de Socios</h4>
                    <div class="button" align="right">
                    <a href="{{route('socios.create')}}" <button type="button" class="btn btn-primary btn-small"   align="right"> <i class="fas fa-user-plus"></i> Nuevo Socio</button></a>
                    </div>
        </div>     
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
                  <th>Fecha Nacimiento</th>
                  <th>Localidad</th>
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
                  <td>{{$socio->Localidad}}</td>               
                  <td>
                    <div class="center" align="center" class="btn-group center"><a class="btn btn-default" title="Acciones" data-toggle="dropdown" href=""><i class="fas fa-cog"></i> </a>
                      <ul class="dropdown-menu" style="left:auto; right:auto; top:auto">
                       <li><a href="{{route('socios.edit',$socio->idSocio)}}"><i class="fas fa-user-edit"></i>   Modificar</a></li>
                       <li><a href=""><i class="fas fa-user-tie"></i>   Tutores</a></li>
                       <li><a href=""><i class="fas fa-file"></i>   Documentación</a></li>
                       <li><a href=""><i class="fas fa-file-invoice-dollar"></i>   Emitir Recibos</a></li>
                       <li><a href="{{route('socios.destroy',$socio->idSocio)}}" onclick="return confirm('¿Seguro que deseas eliminar el Socio?')"><i class="fas fa-user-times"></i>   Eliminar</a></li> 
                      </ul>
                    </div>
                  </td>
                </tr>

               @endforeach
              </tbody>
          </table>  
</div>

@endsection





