<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
use App\Socio;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Requests\TutorRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function __construct(){
    $this->middleware('auth');
  }


     public function index(Request $request)
    {
        $tutores= tutor::search($request->Apellido)->orderBy ('Apellido','ASC')->paginate (5);
        return view ('Tutores.tutores')->with('tutores',$tutores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Tutores.nuevotutor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorRequest $request)
    {
        $tutor = new Tutor;
       $tutor -> idTutor = $request->idTutor;
       $tutor -> Nombre = $request->Nombre;
       $tutor -> Apellido = $request->Apellido;
       $tutor -> Domicilio = $request->Domicilio;
       $tutor -> Localidad = $request->Localidad;
       $tutor -> Telefono = $request->Telefono;
       $tutor -> Celular = $request->Celular;
       $tutor -> save();
       Session::flash('message','Se agrego el nuevo tutor  '. $tutor->Apellido. ', ' .$tutor->Nombre.''); 
       return redirect('tutores');
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
        $tutor = Tutor::find($id);
       return view('Tutores/editartutor')->with('tutor',$tutor);    }

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
            'idTutor'=> 'required|size:8|unique:tutor,idTutor,'.$id.',idTutor',
            'Nombre' => 'required|min:3|max:255',
            'Apellido' => 'required|min:3|max:255',
            'Domicilio' => 'required|min:3|max:255',
            'Localidad' => 'required|min:3|max:255',
            'Telefono' => 'required|min:6',
            'Celular' => 'required|min:6',          
         ]);


           $tutor = Tutor::find($id);
           $tutor -> idTutor = $request->idTutor;
           $tutor -> Nombre = $request->Nombre;
           $tutor -> Apellido = $request->Apellido;
           $tutor -> Domicilio = $request->Domicilio;
           $tutor -> Localidad = $request->Localidad;
           $tutor -> Telefono = $request->Telefono;
           $tutor -> Celular = $request->Celular;

           $tutor -> save();
            Session::flash('message','Se editó el Tutor '. $tutor->Apellido. ' con Éxito'); 
            return redirect('tutores');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = tutor::find($id);
        $socio= socio::where('TutorId',$tutor->idTutor)->first();
        
   
     if(is_null($socio)){

            $tutor->delete();
            Session::flash('message','El Tutor '. $tutor->Apellido.' ,' . $tutor->Nombre.' a sido borrado en forma exitosa'); 
           return redirect('tutores');
         
     }
    else{
            Session::flash('message','El tutor esta vinculado con algún socio, no se puede eliminar'); 
           return redirect('tutores');
           
     }
    }    
}
