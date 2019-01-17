<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\redirect;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;




use Flash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    $this->middleware('auth');
  }


     public function index()
    {
        $user= User::get();
        return view ('Usuarios.usuario')->with('User',$user);
    }

 public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('message','El Usuario '. $user->apellido. ', ' .$user->name .' a sido borrado en forma exitosa'); 
         return redirect('usuario');
    }


 public function edit($id)
    {
       $user = User::find($id);
       return view('Usuarios/editarusuario')->with('usuario',$user);
    }

    public function create()
    {
        return view('Usuarios.nuevousuario');
    }


  public function update(Request $request, $id)
    {
       $request->validate([
            'name' => 'required|min:3|max:255',
            'apellido' => 'required|min:3|max:255',
            'usuario' => 'required|min:6|max:255|unique:users,usuario,'.$id.',id',
            'perfil' => 'required|max:255',
            'password' => 'required|min:6',
         ]);


        $user = User::find($id);
        $user->apellido = $request->apellido;
        $user->name = $request->name;
        $user->usuario = $request->usuario;
        $user->password = Hash::make($request['password']);
        $user -> passvisible =$request->password;
        $user->perfil = $request->perfil;
        $user -> save();
        Session::flash('message','Se editó el Usuario '. $user->name. ' con Éxito'); 
        return redirect('usuario');

    }   


public function store(UserRequest $request)
    {
       $usuario = new User;
       $usuario -> apellido = $request->apellido;
       $usuario -> name = $request->name;
       $usuario -> usuario = $request->usuario;
       $usuario -> password = Hash::make($request['password']);
       $usuario -> passvisible =$request->password;
       $usuario -> perfil = $request->perfil;
       $usuario -> save();
     Session::flash('message','Se agregó el Usuario '. $usuario->name. ' con Éxito'); 
       return redirect('usuario');
    }

}

