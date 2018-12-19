@extends ('template.main')
@section('title',' Usuarios')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Listado de Usuarios</h4>
                    <div class="button" align="right">
                    <a href="{{route('usuario.create')}}" <button type="button" class="btn btn-primary btn-small"   align="right"> <i class="fas fa-user-plus"></i> Nuevo Usuario</button></a>
                    </div>
        </div>     
        <br>

 @if (Session::has('message'))
              <p>
              <div class="alert alert-success"> {{ Session::get('message')}}
                <button class="close" data-dismiss="alert">×</button>
              </div>
             
    @endif 



           <table class="table table-striped table-borderer" id="UsuariosTabla">
                        <thead>
                          <tr>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Perfil</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                         <tr class="gradeX">
                            @foreach($User as $user)
                                <td>{{$user->apellido}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->usuario}}</td>       
                                <td>{{$user->perfil}}</td>      
                                <td>
                                  <a href="{{route('usuario.edit',$user->id)}}" class="btn btn-success">Editar</a>
                                  <a href="{{route('usuario.destroy',$user->id)}}" onclick="return confirm('¿Seguro que deseas eliminar el Usuario?')" class="btn btn-danger">Eliminar</a>
                                </td>


                           </tr>
                           @endforeach
                      </tbody>
                    </table>
  </div>


@endsection



