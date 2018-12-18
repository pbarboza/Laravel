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

<div class="modal fade" id="NuevoUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          @if (count($errors)>0)
              <div class="alert alert-danger" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                  </button>
                   <ul>
                   @foreach ($errors -> all() as $error)
                      <li>{{$error}}</li>
                   @endforeach
                   </ul>
                   
             </div>
          @endif


          {!!Form::open (['route' => 'usuario.store', 'method' =>'post', 'novalidate', 'class' => 'form-horizontal'])!!} 

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Apellido</label>
                   <div class="col-sm-10">
                  <input type="text"  name="apellido" id="apellido" class="form-control input-sm" required >
                </div>
              </div>

                <div class="form-group row">
                 <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" name="name" id="name" class="form-control input-sm" required>
                </div>
              </div>

                <div class="form-group row">
                 <label class="col-sm-2 col-form-label">Usuario</label>
               <div class="col-sm-10">
                  <input type="text" name="usuario" id="usuario" class="form-control input-sm" required>
                </div>
              </div>

                <div class="form-group row">
               <label class="col-sm-2 col-form-label">Contraseña</label>
               <div class="col-sm-10">
                  <input type="password" name="password" id="password" class="form-control input-sm" required>
              </div>  
                </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Perfil</label>
                    <div class="col-sm-10">
                       <select  name="perfil" id="perfil" class="form-control input-sm" required>
                           <option selected> Invitado</option>
                           <option>Administrador</option>
                       </select>
                    </div>
               </div>
             
            <br>

            <div class="form-actions" align="right">
                     
                     {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                     <a href="/usuario"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
    </div>
  </div>
</div>


@endsection



