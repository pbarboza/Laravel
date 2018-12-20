@extends ('template.main')
@section('title',' Documentación')
@section('content')


<div class="container">
        <br><br>

      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Nuevo Tipo de Documentación</h4>
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
      
          {!!Form::open (['route' => 'documentacion.store', 'method' =>'post', 'novalidate', 'class' => 'form-horizontal'])!!} 

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nombre</label>
                   <div class="col-sm-10">
                  <input type="text"  name="Descripcion" value="{{ old('Descripcion') }}" id="Descripcion" class="form-control input-sm" >
                </div>
              </div>

               
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Obligatoria</label>
                    <div class="col-sm-10">
                       <select  name="Obligatorio" id="Obligatorio" class="form-control input-sm" >
                           <option selected>SI</option>
                           <option>NO</option>
                       </select>
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



