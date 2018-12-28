<!-- la vista para dar de alta una nueva documentación del socio, aqui llamaría al store de la tabla
documentacion_socio   -->

@extends ('template.main')
@section('title',' Documentación')
@section('content')

<div class="container">
        <br><br>

      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Nueva Documentación del Socio</h4>
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
      
          {!!Form::open (['route' => 'DocSocio.store', 'method' =>'POST','files'=>true, 'class' => 'form-horizontal'])!!} 

         
               <div class="form-group row">
                  {!! Form::label('idDocumentacion','Tipo Documentación',['class' =>'col-sm-2 col-form-label']) !!}
                  <div class="col-sm-10">
                  {!! Form::select ('idDocumentacion',$documentacion,null,['class' =>'form-control input-sm','placeholder'=>'Seleccione una opción','required']) !!}
                  </div>
               </div>


              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Descripción</label>
                   <div class="col-sm-10">
                  <input type="text"  name="Descripcion" value="{{ old('Descripcion') }}" id="Descripcion" class="form-control input-sm" required>
                </div>
              </div>

               <div class="form-group row">
                  {!! Form::label('archivo','Archivo',['class' =>'col-sm-2 col-form-label']) !!}
                  <div class="col-sm-10">
                  {!! Form::file('archivo') !!}
                  </div>
              </div>
             
             
            <br>

            <div class="form-actions" align="right">
                     
                     {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                     <a href="/documentacion"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
</div>


@endsection