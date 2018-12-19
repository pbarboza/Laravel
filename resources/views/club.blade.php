@extends ('template.main')
@section('title',' Mi Club')
@section('content')

<div class="container">
        <br><br>

  <div class="widget-title"> <span class="icon"></span>
                    <h4>Datos de Mi Club</h4>
        </div>     


@if (Session::has('message'))
              <p>
              <div class="alert alert-success"> {{ Session::get('message')}}
                <button class="close" data-dismiss="alert">×</button>
              </div>
             
    @endif 


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
      {!!Form::open (['route' => ['club.update',$club], 'method' =>'PUT' , 'class' => 'form-horizontal'])!!} 

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Razon Social</label>
                   <div class="col-sm-10">
                  <input type="text" value="{{$club->RazonSocial}}" name="RazonSocial" id="RazonSocial" class="form-control input-sm" required >
                </div>
              </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nombre Fantasia</label>
                   <div class="col-sm-10">
                  <input type="text" value="{{$club->NombreFantasia}}" name="NombreFantasia" id="NombreFantasia" class="form-control input-sm" required>
                </div>
              </div>

             <div class="form-group row">
                 <label class="col-sm-2 col-form-label">Cuit</label>
                  <div class="col-sm-10">
                  <input type="text"  data-toggle="tooltip" data-placement="right" title="Ingrese su Cuit con guiones" value="{{$club->Cuit}}" name="Cuit" id="Cuit" class="form-control input-sm" required >
                </div>
              </div>

             <div class="form-group row">
              <label class="col-sm-2 col-form-label">Categoria IVA</label>
                <div class="col-sm-10">
                 
                   <select  name="Iva" id="Iva" class="form-control input-sm" required>
                             
                            <?php
                              $proceso="{$club->Iva}";
                                switch ($proceso) {
                                	case 'Responsable Inscripto':?>
                                	 <option selected>Responsable Inscripto</option> 
                             		 <option>Sujeto Exento</option>
                              		 <option>Responsable Monotributista</option>
                                	<?php
									break;

                                	case 'Sujeto Exento':?>
                                	<option>Responsable Inscripto</option> 
                             		 <option selected>Sujeto Exento</option>
                              		 <option>Responsable Monotributista</option>
                                	<?php	
                               		break;
                               		case 'Responsable Monotributista':?>
                                	<option>Responsable Inscripto</option> 
                             		 <option>Sujeto Exento</option>
                              		 <option selected>Responsable Monotributista</option>
                              		 <?php
                              		 break;
                              	    }
                              ?>
                             
                             
                    </select> 
                </div>
              </div>

              <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Domicilio</label>
                     <div class="col-sm-10">
                    <input type="text" value="{{$club->Domicilio}}" name="Domicilio" id="Domicilio" class="form-control input-sm" required>
                    </div>  
              </div>

              <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Telefono</label>
                     <div class="col-sm-10">
                    <input type="text" value="{{$club->Telefono}}" name="Telefono" id="Telefono" class="form-control input-sm" required>
                    </div>
              </div>

 			   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ingresos Brutos</label>
                     <div class="col-sm-10">
                    <input type="text" value="{{$club->IngresosBrutos}}" name="IngresosBrutos" id="IngresosBrutos" class="form-control input-sm" required>
                    </div> 
                </div>

                <div class="form-group row">
              		<label class="col-sm-2 col-form-label">Inicio de Actividad</label>
              		<div class="col-sm-10">
              		<input type="text" value="{{$club->InicioActividad}}" name="InicioActividad" id="InicioActividad" class="form-control input-sm" required>
                	</div>
          		</div>
    

            <div class="form-actions" align="right">
                     
                     {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                     <a href="/inicio"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
</div>

@endsection