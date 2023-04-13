<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Regiao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $adminUser = User::where('perfil', 'Administrador')->first();

        if (!$adminUser) {
            return redirect()->route('register');
        }

        $regioes = Regiao::orderBy('nome', 'asc')->get();

        return view('usuario.cadastro', compact('regioes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->name              = $request->name;
        $user->sexo              = $request->sexo;
        $user->dataNascimento    = $request->dataNascimento;
        $user->nomeMae           = $request->nomeMae;
        $user->nomePai           = $request->nomePai;
        $user->estadoCivil       = $request->estadoCivil;
        $user->profissao         = $request->profissao;
        $user->tituloEleitor     = $request->tituloEleitor;
        $user->zonaEleitoral     = $request->zonaEleitoral;
        $user->secaoEleitoral    = $request->secaoEleitoral;
        $user->RG                = $request->RG;
        $user->CPF               = $request->CPF;
        $user->cep               = $request->cep;
        $user->endereco          = $request->endereco;
        $user->numero            = $request->numero;
        $user->bairro            = $request->bairro;
        $user->id_regiao         = $request->id_regiao;
        $user->tempoResidencia   = $request->tempoResidencia;
        $user->email             = $request->email;
        $user->perfil            = 'Usuario';
        $user->password          = Hash::make($request->password);

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/users'), $imageName);

            $user->image = $imageName;

        }

        $user->save();

        return redirect()->route('user-create')->with('userCreate', 'O cadastro foi realizado!');

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
