<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{

    public function index($erro = null)
    {
        return view('Login_View');
    }
    public function verificaLogin(Request $request)
    {
        $email = $request->email;
        $senha = md5($request->senha);



        $user = DB::table('usuario')->where('email', $email)->where('senha', $senha)->first();

        if ($user) {
            $request->session()->put('active', true);
            $request->session()->put('email', $user->email);
            $request->session()->put('usuario', $user->idusuario);
            
            return redirect()->route('Inicio');
        } else {
            return redirect()->route('Login')->with('erro', 1);
        }
    }

    public function Logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('Inicio');
    }
}
