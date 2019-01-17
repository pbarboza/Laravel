<!-- la vista para dar de alta una nueva documentación del socio, aqui llamaría al store de la tabla
documentacion_socio   -->

@extends ('template.main')
@section('title',' Documentación')
@section('content')

<div class="container">
        <br><br>

     
{!!Form::open (['route' => 'DocSocio.store', 'method' =>'POST','files'=>true, 'class' => 'form-horizontal'])!!} 
 
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Nueva Documentación para {{$socio->Apellido}}, {{$socio->Nombre}} </h4>
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
      
               <div class="form-group row">
                  {!! Form::hidden('socio_id','DNI',['class' =>'col-sm-2 col-form-label']) !!}
                  <div class="col-sm-10">
                  {!! Form::hidden('socio_id',$socio->idSocio,null,['class' =>'form-control input-sm','disabled']) !!}
                  </div>
               </div>

               <div class="form-group row">
                  {!! Form::label('documentacion_id','Tipo Documentación',['class' =>'col-sm-2 col-form-label']) !!}
                  <div class="col-sm-10">
                  {!! Form::select ('documentacion_id',$documentacion,null,['class' =>'form-control input-sm','placeholder'=>'Seleccione una opción','required']) !!}
                  </div>
               </div>


              <div class="form-group row">
                  {!! Form::label('descripcion','Descripción',['class' =>'col-sm-2 col-form-label']) !!}
                   <div class="col-sm-10">
                 {!! Form::text ('descripcion',null,['class' =>'form-control input-sm','placeholder'=>'Descripción de la documentación','required']) !!}
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
                     <a href="{{route('DocSocio.edit',$socio->idSocio)}}"<button type="submit" class="btn btn-danger">Cancelar</button> </a>
            </div>
      {!!Form::close()!!} 
</div>


@endsection