<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->session()->get('active')) {
            return redirect()->route('Login');
        } else {
            $usuario = $request->session()->get('usuario');


            $usuario = DB::table('comentario')
                ->join('usuario', 'usuario.idusuario', '=', 'comentario.usuario_idusuario')
                ->join('pessoa', 'pessoa.usuario_idusuario', '=', 'usuario.idusuario')
                ->join('endereco', 'endereco.idendereco', '=', 'pessoa.endereco_idendereco')
                ->join('foto', 'pessoa.foto_idfoto', '=', 'foto.idfoto')
                ->where('usuario.idusuario', $usuario)
                ->first();

            return view('Usuario_View')->with('usuario', $request->session()->get('usuario'))->with('dados', $usuario);
        }
    }
    public function atualizarCadastro(Request $request)
    {
        if (!$request->session()->get('active')) {
            return redirect()->route('Login');
        } else {
            $nome = $request->nome;
            $telefone = $request->telefone;
            $idpessoa = $request->idpessoa;

            DB::table('pessoa')
                ->where('idpessoa', $idpessoa)
                ->update(array('nomepessoa' => $nome, 'telefone' => $telefone));

            $cep = $request->cep;
            $rua = $request->rua;
            $numero = $request->numero;
            $bairro = $request->bairro;
            $idendereco = $request->idendereco;

            DB::table('endereco')
                ->where('idendereco', $idendereco)
                ->update(array('cep' => $cep, 'rua' => $rua, 'numero' => $numero, 'bairro' => $bairro));

                return redirect()->route('Usuario');
        }
    }
}
