<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
  
  public function __construct(){
 $this->middleware('guest',['only'=>'showLoginForm']);
 
}

  public function showLoginForm(){
    return view ('auth.login');
  }


   public function login()
   {
         $credentials= $this->validate(request(),[
            'usuario'=> 'required|string',
            'password'=> 'required|string|min:6',
        ]);

   
    if(Auth::attempt($credentials))
    {
        return redirect()->route('inicio');
    }
        return back()->withErrors(['password'=>'Alguno de los datos ingresados no es correcto']);
    


   }

   public function logout(){
    Auth::logout();
    return redirect('/');
   }

}
