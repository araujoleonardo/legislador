<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $usuarios = User::get();

        return view('usuario.listar', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'sexo' => 'required',
            'dataNascimento' => 'required',
            'nomeMae' => 'required',
            'nomePai' => 'required',
            'estadoCivil' => 'required',
            'profissao' => 'required',
            'tituloEleitor' => 'required',
            'zonaEleitoral' => 'required',
            'secaoEleitoral' => 'required',
            'RG' => 'required',
            'CPF' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'id_regiao' => 'required',
            'tempoResidencia' => 'required',
        ]);

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->sexo = $request->sexo;
        $usuario->dataNascimento = $request->dataNascimento;
        $usuario->nomeMae = $request->nomeMae;
        $usuario->nomePai = $request->nomePai;
        $usuario->estadoCivil = $request->estadoCivil;
        $usuario->profissao = $request->profissao;
        $usuario->tituloEleitor = $request->tituloEleitor;
        $usuario->zonaEleitoral = $request->zonaEleitoral;
        $usuario->secaoEleitoral = $request->secaoEleitoral;
        $usuario->RG = $request->RG;
        $usuario->CPF = $request->CPF;
        $usuario->cep = $request->cep;
        $usuario->endereco = $request->endereco;
        $usuario->numero = $request->numero;
        $usuario->bairro = $request->bairro;
        $usuario->id_regiao = $request->id_regiao;
        $usuario->tempoResidencia = $request->tempoResidencia;
        $usuario->perfil = 'usuario';

        dd($usuario);

        $usuario->save();

        return redirect()->view('usuario.cadastro')->with('session_sucesso', 'O cadastro foi realizado.');

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
