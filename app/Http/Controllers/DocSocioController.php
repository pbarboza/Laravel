<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socio_documentacion;
use Illuminate\Support\Facades\Session;
use App\Documentacion;
use App\Socio;


class DocSocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
             $socio = Socio::find($id);
             $documentacion = Documentacion::pluck('descripcion', 'idDocumentacion');
             return view('Socios.nuevadocsocio')
                    ->with ('documentacion',$documentacion)
                    ->with('socio',$socio);


    }


    public function downloadFile($file){
         $pathtoFile = public_path().'/archivos/'.$file;
         return response()->download($pathtoFile);     
    }

    /**  
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $request->validate([
            'archivo'=> 'required',
                    
         ]);



          if ($request -> file('archivo')){
          $file= $request ->file ('archivo');
          $name= $file->getClientOriginalName();
          $path= public_path().'/archivos/';
          $file -> move($path,$name);
          }

       $socio_documentacion = new socio_documentacion;
       $socio_documentacion -> documentacion_id = $request->documentacion_id;
       $socio_documentacion -> socio_id = $request->socio_id;
       $socio_documentacion -> descripcion = $request->descripcion;
       $socio_documentacion -> archivo =$name;
       $socio_documentacion -> save();
       Session::flash('message','Se agregó la nueva documentación al socio'); 


       $socio = Socio::find($request->socio_id);
       $DocSocio= socio_documentacion::where('socio_id',$request->socio_id)->get();
       
        return view ('Socios/documentacionsocio')
        ->with('DocSocio',$DocSocio)
        ->with('socio',$socio);


    }

/**     
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
  
        $socio = Socio::find($id);
        $DocSocio= socio_documentacion::where('socio_id',$id)->get();
        $DocSocio ->each (function($DocSocio){
            $DocSocio->Documentacion;
            
        });
        
         return view ('Socios/documentacionsocio')
         ->with('DocSocio',$DocSocio)
         ->with('socio',$socio);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
       
        $DocSocio = socio_documentacion::find($id);
        $socio = Socio::find($DocSocio->socio_id);
        $imagen = $DocSocio->archivo;
        $path= public_path().'/archivos/'.$imagen;
       
        if(file_exists($path)){
             unlink($path);
             $DocSocio->delete();
             $DocSocio1= socio_documentacion::where('socio_id',$socio->idSocio)->get();
             Session::flash('message','Se elimino la documentación del socio'); 
                     return view('Socios/documentacionsocio')
                            ->with('DocSocio',$DocSocio1)
                            ->with('socio',$socio);

        }else{
             Session::flash('message','No se pudo eliminar la documentación del socio'); 
        }


        
    }
}
