@extends ('template.main')
@section('title',' Documentación')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Listado de Tipos de Documentación</h4>
                    <div class="button" align="right">
                    <a href="{{route('documentacion.create')}}" <button type="button" class="btn btn-primary btn-small"   align="right"> <i class="fas fa-plus"></i> Nuevo Tipo de Documentación</button></a>
                    </div>
        </div>     
        <br>

 @if (Session::has('message'))
              <p>
              <div class="alert alert-success"> {{ Session::get('message')}}
                <button class="close" data-dismiss="alert">×</button>
              </div>
             
    @endif 



           <table class="table table-striped table-borderer" id="DocumentacionTabla">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Obligatorio</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                         <tr class="gradeX">
                            @foreach($documentacion as $documentacion)
                                <td>{{$documentacion->Descripcion}}</td>
                                <td>{{$documentacion->Obligatorio}}</td>
                                
                                <td>
                                  <a href="{{route('documentacion.edit',$documentacion->idDocumentacion)}}" class="btn btn-success">Editar</a>
                                  <a href="{{route('documentacion.destroy',$documentacion->idDocumentacion)}}" onclick="return confirm('¿Seguro que deseas eliminar el tipo de Documentación?')" class="btn btn-danger">Eliminar</a>
                                </td>


                           </tr>
                           @endforeach
                      </tbody>
                    </table>
  </div>


@endsection



