<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socio;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Requests\SocioRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;


class SocioController extends Controller
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
        $socios= socio::search($request->Apellido)->orderBy ('Apellido','ASC')->paginate (5);
        return view ('Socios.socios')->with('socios',$socios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Socios.nuevosocio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(SocioRequest $request)
    {
       
       $socio = new Socio;
       $socio -> idSocio = $request->idSocio;
       $socio -> Nombre = $request->Nombre;
       $socio -> Apellido = $request->Apellido;
       $socio -> FechaNacimiento = $request->FechaNacimiento;
       $socio -> Domicilio = $request->Domicilio;
       $socio -> Localidad = $request->Localidad;
       $socio -> FechaIngreso = $request->FechaIngreso;
       $socio -> Telefono = $request->Telefono;
       $socio -> save();
       Session::flash('message','Se agrego el nuevo socio  '. $socio->Apellido. ', ' .$socio->Nombre.''); 
       return redirect('socios');
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
       return view('Socios/editarsocio')->with('socio',$socio);
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
            'idSocio'=> 'required|size:8|unique:socio,idSocio,'.$id.',idSocio',
            'Nombre' => 'required|min:3|max:255',
            'Apellido' => 'required|min:3|max:255',
            'FechaNacimiento' => 'required|size:10',
            'Domicilio' => 'required|min:3|max:255',
            'Localidad' => 'required|min:3|max:255',
            'FechaIngreso' => 'required|size:10',
            'Telefono' => 'required|integer|min:6',          
         ]);


           $socio = Socio::find($id);
           $socio -> idSocio = $request->idSocio;
           $socio -> Nombre = $request->Nombre;
           $socio -> Apellido = $request->Apellido;
           $socio -> FechaNacimiento = $request->FechaNacimiento;
           $socio -> Domicilio = $request->Domicilio;
           $socio -> Localidad = $request->Localidad;
           $socio -> FechaIngreso = $request->FechaIngreso;
           $socio -> Telefono = $request->Telefono;
           $socio -> save();
            Session::flash('message','Se editó el Socio '. $socio->Apellido. ' con Éxito'); 
            return redirect('socios');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socio = socio::find($id);
        $socio->delete();
        Session::flash('message','El Socio '. $socio->Apellido. ', ' .$socio->Nombre .' a sido borrado en forma exitosa'); 
       return redirect('socios');
    }
}
