@extends ('template.main')
@section('title',' Usuarios')
@section('content')


<div class="container">
        <br><br>

      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Editar Usuario</h4>
        </div>     


 @if (count($errors)>0)
                <div class="alert alert-danger" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    <p>Corrige los siguientes errores:</p>
                     <ul>
                     @foreach ($errors -> all() as $error)
                        <li>{{$error}}</li>
                     @endforeach
                     </ul>
                     
                </div>
            @endif

  <div class="widget-content nopadding">
      {!!Form::open (['route' => ['usuario.update',$usuario], 'method' =>'PUT' , 'class' => 'form-horizontal'])!!} 

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Apellido</label>
                   <div class="col-sm-10">
                  <input type="text" value="{{$usuario->apellido}}" name="apellido" id="apellido" class="form-control input-sm" required >
                </div>
              </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nombre</label>
                   <div class="col-sm-10">
                  <input type="text" value="{{$usuario->name}}" name="name" id="name" class="form-control input-sm" required>
                </div>
              </div>

             <div class="form-group row">
                 <label class="col-sm-2 col-form-label">Usuario</label>
                  <div class="col-sm-10">
                  <input type="text" value="{{$usuario->usuario}}" name="usuario" id="usuario" class="form-control input-sm" required >
                </div>
              </div>

              <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Contraseña</label>
                     <div class="col-sm-10">
                    <input type="password" data-toggle="tooltip" data-placement="right" title="Para cambiar la contraseña, ingrese una nueva" value="{{$usuario->passvisible}}" name="password" id="password" class="form-control input-sm" >
                    </div>  
              </div>

              <div class="form-group row">
              <label class="col-sm-2 col-form-label">Perfil</label>
                <div class="col-sm-10">
                 
                   <select  name="perfil" id="perfil" class="form-control input-sm" required>
                             
                              <?php
                              $proceso="{$usuario->perfil}";
                                if ($proceso=='Administrador'){
                              ?>
                              <option selected>Administrador</option> 
                              <option>Invitado</option>
                              <?php
                              }else{
                              ?>
                              <option>Administrador</option> 
                              <option selected>Invitado</option>
                              <?php
                              }                              
                              ?>
                    </select> 
                </div>
              </div>


            <div class="form-actions" align="right">
                     
                     {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                     <a href="/usuario"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
</div>
        



@endsection



