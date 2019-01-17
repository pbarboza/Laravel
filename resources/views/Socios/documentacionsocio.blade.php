@extends ('template.main')
@section('title',' Documentación')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Documentación del Socio: {{$socio->Apellido}}, {{$socio->Nombre}}</h4>
                    <div class="button" align="right">
                    <a href="{{route('DocSocio.create',[$socio->idSocio])}}" <button type="button" class="btn btn-primary btn-small"   align="right"> <i class="fas fa-plus"></i> Nueva Documentación</button></a>
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
                            <th>Tipo Documentación</th>
                            <th>Descripción</th>
                            <th>Obligatoria</th>
                            <th>Nombre Archivo</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        </tr>
              </thead>
            <tbody>
              <tr class="gradeX">
              @foreach($DocSocio as $docsocio)
                  <td>{{$docsocio->Documentacion->Descripcion}}</td>
                  <td>{{$docsocio->descripcion}}</td>
                  <td>{{$docsocio->Documentacion->Obligatorio}}</td>
                  <td>{{$docsocio->archivo}}</td>
                  <td>
                    <a href="{{route('DocSocio.downloadFile',$docsocio->archivo)}}" class="btn btn-success">Descargar</a>
                    <a href="{{route('DocSocio.destroy',$docsocio->idDocSocio)}}" onclick="return confirm('¿Seguro que deseas eliminar el Usuario?')" class="btn btn-danger">Eliminar</a>
                  </td>
               </tr>

               @endforeach
              </tbody>
          </table>  
  </div>


@endsection




