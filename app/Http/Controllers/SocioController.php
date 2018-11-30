<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socio;
use Illuminate\Support\Facades\Session;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios= socio::get();
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
     public function store(Request $request)
    {
       $socio = new Socio;
       $socio -> Apellido = $request->Apellido;
       $socio -> Nombre = $request->Nombre;
       $socio -> FechaNacimiento = $request->FechaNacimiento;
       $socio -> Domicilio = $request->Domicilio;
       $socio -> Localidad = $request->Localidad;
       $socio -> FechaIngreso = $request->FechaIngreso;
       $socio -> Telefono = $request->Telefono;
       $socio -> save();
       Session::flash('message','Se agrego un nuevo socio'); 
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
        //
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
        //
    }
}
