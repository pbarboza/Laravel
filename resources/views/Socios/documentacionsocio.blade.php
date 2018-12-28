@extends ('template.main')
@section('title',' Documentación')
@section('content')


<div class="container">
        <br><br>


      
        <div class="widget-title"> <span class="icon"></span>
                    <h4>Documentación del Socio</h4>
                    <div class="button" align="right">
                    <a href="{{route('DocSocio.create')}}" <button type="button" class="btn btn-primary btn-small"   align="right"> <i class="fas fa-plus"></i> Nueva Documentación</button></a>
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
                      </tbody>
                    </table>
  </div>


@endsection




