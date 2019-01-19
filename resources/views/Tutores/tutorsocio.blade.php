@extends ('template.main')
@section('title','Datos del Tutor')
@section('content')


<div class="container">
        <br><br>

      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Datos del Tutor del socio: {{$socio->Apellido}}, {{$socio->Nombre}} </h4>
                    <br>
        </div>     


        <div class="widget-content nopadding">

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Apellido</label>
                 <div class="col-sm-10">
                  <input type="text" name="Apellido" id="Apellido" value="{{$tutor->Apellido}}" class="form-control input-sm" readonly>
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-10">
                  <input type="text" name="Nombre" id="Nombre"  value="{{$tutor->Nombre}}" class="form-control input-sm" readonly>
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">DNI</label>
                  <div class="col-sm-10">
                  <input type="text" name="idTutor" id="idTutor"  value="{{$tutor->idTutor}}" data-toggle="tooltip" data-placement="right" title="Ingrese el DNI del Tutor sin puntos"  class="form-control input-sm" readonly>
                </div>
              </div>

               

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Domicilio</label>
                  <div class="col-sm-10">
                  <input type="text" name="Domicilio" id="Domicilio"  value="{{$tutor->Domicilio}}" class="form-control input-sm" readonly>
                  </div>
              </div>


               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Localidad</label>
                  <div class="col-sm-10">
                  <input type="text" name="Localidad" id="Localidad"  value="{{$tutor->Localidad}}" class="form-control input-sm" readonly>
                  </div>
              </div>
             
            
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" name="Telefono" id="Telefono" value="{{$tutor->Telefono}}" class="form-control input-sm" readonly>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Celular</label>
                <div class="col-sm-10">
                <input type="text" name="Celular" id="Celular" value="{{$tutor->Celular}}" class="form-control input-sm" readonly>
                </div>
              </div>

                 <div class="form-actions" align="right">
                          <a href="{{route('socios.cambiarTutor',$socio->idSocio)}}"><button type="button" class="btn btn-secondary">Cambiar de Tutor</button></a>
                          <a href="{{route('socios.desvincularTutor',$socio->idSocio)}}" onclick="return confirm('¿Seguro que deseas desvincular el Tutor {{$tutor->Apellido}} del socio {{$socio->Apellido}}?')"><button type="button" class="btn btn-danger">Desvincular Tutor</button></a>
                          <a href="/socios"><button type="button" class="btn btn-success">Aceptar</button></a>
                </div>
  
          
</div>


@endsection
