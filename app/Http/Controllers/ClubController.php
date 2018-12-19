<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use Illuminate\Support\Facades\Session;



class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $club= Club::get();
        return view ('club')->with('club',$club);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $club = Club::find($id);
       return view('club')->with('club',$club);
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
            'RazonSocial' => 'required|min:3|max:255',
            'NombreFantasia' => 'required|min:3|max:255',
            'Cuit' => 'required|size:13',
            'Iva' => 'required|min:3|max:255',
            'Domicilio' => 'required|min:3|max:255',
            'Telefono' => 'required|min:12|max:15',
            'IngresosBrutos' => 'required|min:12|max:255',
            'InicioActividad' => 'required|min:3|max:255',
         ]);


        $club = Club::find($id);

        $club->RazonSocial = $request->RazonSocial;
        $club->NombreFantasia = $request->NombreFantasia;
        $club->Cuit = $request->Cuit;
        $club->Iva = $request->Iva;
        $club->Domicilio = $request->Domicilio;
        $club->Telefono = $request->Telefono;
        $club->IngresosBrutos = $request->IngresosBrutos;
        $club->InicioActividad = $request->InicioActividad;
        
        $club -> save();
        Session::flash('message','Se editaron los datos de ' .$club->RazonSocial . ' con Éxito'); 
        return redirect('/club/1/edit');
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
