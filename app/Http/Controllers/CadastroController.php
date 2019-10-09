<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CadastroController extends Controller
{

    public function index(Request $request)
    {
        if ($request->session()->get('active')) {
            return redirect()->route('Inicio');
        } else {
            return view('Cadastro_View');
        }
    }

    public function realizaCadastro(Request $request)
    {
        if ($request->session()->get('active')) {
            return view('Inicio_View')->with('usuario', $request->session()->get('usuario'));
        } else {
            if (isset($request->email)) {
                $nome = $request->nome;
                $cpf = $request->cpf;
                $telefone = $request->telefone;
                $email = $request->email;
                $senha = md5($request->senha);
                $cep = $request->cep;
                $rua = $request->rua;
                $numero = $request->numero;
                $bairro = $request->bairro;

                try {
                    DB::table('usuario')->insert([
                        ['email' => $email, 'senha' => $senha]
                    ]);
                    $idusuario = DB::getPdo()->lastInsertId();
                } catch (\Exception $e) {
                    return 'email já cadastrado';
                }

                DB::table('endereco')->insert([
                    ['cep' => $cep, 'rua' => $rua, 'numero' => $numero, 'bairro' => $bairro]
                ]);

                $idendereco = DB::getPdo()->lastInsertId();

                DB::table('pessoa')->insert([
                    ['nomepessoa' => $nome, 'cpf' => $cpf, 'telefone' => $telefone, 'usuario_idusuario' => $idusuario, 'endereco_idendereco' => $idendereco]
                ]);

                return redirect()->route('Login');
            } else {
                return redirect()->route('Cadastro');
            }
        }
    }
}
