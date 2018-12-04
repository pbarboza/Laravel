<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Session;
use Flash;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios= usuario::get();
        return view ('Usuarios.usuario')->with('usuario',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('Usuarios.nuevousuario');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $usuario = new Usuario;
       $usuario -> Apellido = $request->Apellido;
       $usuario -> Nombre = $request->Nombre;
       $usuario -> Usuario = $request->Usuario;
       $usuario -> Pass = $request->Pass;
       $usuario -> save();
       Session::flash('message','Se agrego un nuevo Usuario'); 
       return redirect('usuario');
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
       $usuario = Usuario::find($id);
       return view('Usuarios/editarusuario')->with('usuario',$usuario);
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
        $usuario = Usuario::find($id);
        $usuario->Apellido = $request->Apellido;
        $usuario->Nombre = $request->Nombre;
        $usuario->Usuario = $request->Usuario;
        $usuario->Pass = $request->Pass;
        $usuario -> save();
        Session::flash('message','Se editó el Usuario '. $usuario->Nombre. ' con Éxito'); 
        return redirect('usuario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $usuario = usuario::find($id);
        $usuario->delete();
        Session::error('message','El Usuario '. $usuario->Apellido. ', ' .$usuario->Nombre .' a sido borrado en forma exitosa'); 
       return redirect('usuario');
    }
}
