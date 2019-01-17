<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Documentacion;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Requests\DocRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class DocumentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
    $this->middleware('auth');
  }



    public function index()
    {
        $documentacion= documentacion::get();
        return view ('Documentacion.documentacion')->with('documentacion',$documentacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Documentacion.nuevadocumentacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocRequest $request)
    {
       $documentacion = new Documentacion;
       $documentacion -> Descripcion = $request->Descripcion;
       $documentacion -> Obligatorio = $request->Obligatorio;
       $documentacion -> save();
       Session::flash('message','Se agrego el nuevo tipo de documentación  '. $documentacion->Descripcion. ''); 
       return redirect('documentacion');
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
       $documentacion = Documentacion::find($id);
       return view('Documentacion/editardocumentacion')->with('documentacion',$documentacion);
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
    $request->validate([
            'Descripcion' => 'required|min:3|max:255|unique:documentacion,Descripcion,'.$id.',idDocumentacion',
            
           
         ]);
               
        $documentacion = Documentacion::find($id);
        $documentacion->Descripcion = $request->Descripcion;
        $documentacion->Obligatorio = $request->Obligatorio;
        $documentacion -> save();
        Session::flash('message','Se editó el tipo de documentacion '. $documentacion->Descripcion. ' con Éxito'); 
        return redirect('documentacion');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $documentacion = documentacion::find($id);
      
    if(count($documentacion->socio_documentacion)){
         Session::flash('message','El tipo de documentación esta siendo usada por algún socio, no se puede eliminar'); 
         return redirect('documentacion');
    }
    else{
   
      $documentacion->delete();
      Session::flash('message','La documentacion '. $documentacion->Descripcion.' a sido borrado en forma exitosa'); 
       return redirect('documentacion');
    }}
}
