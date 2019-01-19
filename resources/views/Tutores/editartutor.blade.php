@extends ('template.main')
@section('title','Datos del Tutor')
@section('content')


<div class="container">
        <br><br>

      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Datos del Tutor</h4>
                    <br>
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
      {!!Form::open (['route' => ['tutores.update',$tutor], 'method' =>'PUT' , 'class' => 'form-horizontal'])!!} 

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Apellido</label>
                 <div class="col-sm-10">
                  <input type="text" name="Apellido" id="Apellido" value="{{$tutor->Apellido}}" class="form-control input-sm" required>
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-10">
                  <input type="text" name="Nombre" id="Nombre"  value="{{$tutor->Nombre}}" class="form-control input-sm" required>
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">DNI</label>
                  <div class="col-sm-10">
                  <input type="text" name="idTutor" id="idTutor"  value="{{$tutor->idTutor}}" data-toggle="tooltip" data-placement="right" title="Ingrese el DNI del Tutor sin puntos"  class="form-control input-sm" required>
                </div>
              </div>

               

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Domicilio</label>
                  <div class="col-sm-10">
                  <input type="text" name="Domicilio" id="Domicilio"  value="{{$tutor->Domicilio}}" class="form-control input-sm" required>
                  </div>
              </div>
             
             <div class="form-group row">
              <label class="col-sm-2 col-form-label">Localidad</label>
                <div class="col-sm-10">
                 
                   <select  name="Localidad" id="Localidad" class="form-control input-sm" required>
                             
                            <?php
                              $proceso="{$tutor->Localidad}";
                                switch ($proceso) {
                                  case 'Orán':?>
                                    <option selected>Orán</option> 
                                    <option>Hipolito Irigoyen</option>
                                    <option>Pichanal</option>
                                    <option>Otra</option>
                                  <?php
                                  break;

                                  case 'Hipolito Irigoyen':?>
                                    <option>Orán</option> 
                                    <option selected>Hipolito Irigoyen</option>
                                    <option>Pichanal</option>
                                    <option>Otra</option>
                                  <?php 
                                  break;

                                  case 'Pichanal':?>
                                    <option>Orán</option> 
                                    <option>Hipolito Irigoyen</option>
                                    <option selected>Pichanal</option>
                                    <option>Otra</option>
                                   <?php
                                   break;


                                  case 'Otra':?>
                                    <option>Orán</option> 
                                    <option>Hipolito Irigoyen</option>
                                    <option>Pichanal</option>
                                    <option selected>Otra</option>
                                  <?php 
                                  break;

                                    }
                              ?>
                             
                             
                    </select> 
                </div>
              </div>
      
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" name="Telefono" id="Telefono" value="{{$tutor->Telefono}}" class="form-control input-sm" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Celular</label>
                <div class="col-sm-10">
                <input type="text" name="Celular" id="Celular" value="{{$tutor->Celular}}" class="form-control input-sm" required>
                </div>
              </div>

                 <div class="form-actions" align="right">
                    
                     
                     {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                     <a href="/tutores"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
          
</div>


@endsection
