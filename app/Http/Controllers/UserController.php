<?php

namespace App\Http\Controllers;

use App\Models\Regiao;
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
        $usuarios = User::where('perfil', 'usuario')
        ->select('id', 'name', 'dataNascimento', 'sexo', 'zonaEleitoral', 'endereco', 'numero', 'id_regiao')
        ->with('regiao:id,nome')
        ->get();

        return view('usuario.listar', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regioes = Regiao::orderBy('nome', 'asc')->get();

        return view('usuario.cadastro', compact('regioes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'sexo' => 'required',
        //     'dataNascimento' => 'required',
        //     'nomeMae' => 'required',
        //     'nomePai' => 'required',
        //     'estadoCivil' => 'required',
        //     'profissao' => 'required',
        //     'tituloEleitor' => 'required',
        //     'zonaEleitoral' => 'required',
        //     'secaoEleitoral' => 'required',
        //     'RG' => 'required',
        //     'CPF' => 'required',
        //     'cep' => 'required',
        //     'endereco' => 'required',
        //     'numero' => 'required',
        //     'bairro' => 'required',
        //     'id_regiao' => 'required',
        //     'tempoResidencia' => 'required',
        // ]);

        User::create([
            'name'              => $request['name'],
            'sexo'              => $request['sexo'],
            'dataNascimento'    => $request['dataNascimento'],
            'nomeMae'           => $request['nomeMae'],
            'nomePai'           => $request['nomePai'],
            'estadoCivil'       => $request['estadoCivil'],
            'profissao'         => $request['profissao'],
            'tituloEleitor'     => $request['tituloEleitor'],
            'zonaEleitoral'     => $request['zonaEleitoral'],
            'secaoEleitoral'    => $request['secaoEleitoral'],
            'RG'                => $request['RG'],
            'CPF'               => $request['CPF'],
            'cep'               => $request['cep'],
            'endereco'          => $request['endereco'],
            'numero'            => $request['numero'],
            'bairro'            => $request['bairro'],
            'id_regiao'         => $request['id_regiao'],
            'tempoResidencia'   => $request['tempoResidencia'],
            'email'             => $request['email'],
            'perfil'            => 'usuario',
            'password'          => Hash::make($request['password']),
        ]);

        return redirect()->route('user-create')->with('status', 'O cadastro foi realizado!');

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
