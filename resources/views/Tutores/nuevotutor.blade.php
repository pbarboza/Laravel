@extends ('template.main')
@section('title','Nuevo Tutor')
@section('content')


<div class="container">
        <br><br>

      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Nuevo Tutor</h4>
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
     {!!Form::open (['route' => 'tutores.store', 'method' =>'post', 'novalidate', 'class' => 'form-horizontal'])!!} 

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Apellido</label>
                 <div class="col-sm-10">
                  <input type="text" name="Apellido" id="Apellido" value="{{ old('Apellido')}}" class="form-control input-sm" >
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-10">
                  <input type="text" name="Nombre" id="Nombre"  value="{{ old('Nombre') }}" class="form-control input-sm" >
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">DNI</label>
                  <div class="col-sm-10">
                  <input type="text" name="idTutor" id="idTutor"  value="{{ old('DNI') }}" data-toggle="tooltip" data-placement="right" title="Ingrese el DNI del socio sin puntos"  class="form-control input-sm" >
                </div>
              </div>

               
               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Domicilio</label>
                  <div class="col-sm-10">
                  <input type="text" name="Domicilio" id="Domicilio"  value="{{ old('Domicilio') }}" class="form-control input-sm" >
                  </div>
              </div>
             
             <div class="form-group row">
             <label class="col-sm-2 col-form-label">Localidad</label>
                <div class="col-sm-10">
                <select name="Localidad" id="Localidad" value="{{ old('Localidad')}}" class="form-control input-sm" >
                  <option>Orán</option>
                  <option>Hipolito Irigoyen</option>
                  <option>Pichanal</option>
                  <option>Otra</option>
                </select>
                </div>
            </div> 
      
             <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" name="Telefono" id="Telefono" value="{{ old('Telefono') }}" class="form-control input-sm" >
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">Celular</label>
                <div class="col-sm-10">
                <input type="text" name="Celular" id="Celular" value="{{ old('Celular') }}" class="form-control input-sm" >
                </div>
            </div>   


           

          <br>


              <div class="form-actions" align="right">
                     
                     {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                     <a href="/tutores"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
          
</div>


@endsection
