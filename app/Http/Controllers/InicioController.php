<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;


class InicioController extends Controller
{

    public function index(Request $request)
    {
        $comentarios = DB::table('comentario')
        ->join('usuario', 'usuario.idusuario', '=', 'comentario.usuario_idusuario')
        ->join('pessoa', 'pessoa.usuario_idusuario', '=', 'usuario.idusuario')
        ->join('foto', 'pessoa.foto_idfoto', '=', 'foto.idfoto')
        ->get();

        if (!$request->session()->get('active')) {
            return view('Inicio_View')->with('comentarios', $comentarios);
        } else {
            return view('Inicio_View')->with('usuario', $request->session()->get('usuario'))->with('comentarios', $comentarios);
        }
    }

    public function comentario(Request $request)
    {
        if (!$request->session()->get('active')) {
            return redirect()->route('Inicio');
        } else {
            $comentario = $request->comentario;
            $usuario = $request->usuario;
            $data = date('d/m/Y');
            $hora = date('H:m');

            DB::table('comentario')->insert([
                ['comentario' => $comentario, 'data' => $data, 'hora' => $hora, 'usuario_idusuario' => $usuario]
            ]);
            return redirect()->route('Inicio');
        }
    }
}
