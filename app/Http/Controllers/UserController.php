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
            ->where('ativo', 1)
            ->select('id', 'name', 'dataNascimento', 'sexo', 'zonaEleitoral', 'endereco', 'numero', 'id_regiao')
            ->with('regiao:id,nome')
            ->get();

        return view('usuario.listar', compact('usuarios'));
    }

    public function listarInativos()
    {
        $usuarios = User::where('perfil', 'usuario')
            ->where('ativo', 0)
            ->select('id', 'name', 'dataNascimento', 'sexo', 'zonaEleitoral', 'endereco', 'numero', 'id_regiao')
            ->with('regiao:id,nome')
            ->get();

        return view('usuario.listarInativos', compact('usuarios'));
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
        $user->terms             = 1;

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
    public function show(User $user)
    {
        return view('dashboard.user.detalhes', compact('user'));
    }

    public function perfil()
    {
        $regioes = Regiao::orderBy('nome', 'asc')->get();

        return view('dashboard.user.perfil', compact('regioes'));
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
    public function updateDados(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name         = $request->name;
        $user->sexo         = $request->sexo;
        $user->nomeMae      = $request->nomeMae;
        $user->nomePai      = $request->nomePai;
        $user->dataNascimento = $request->dataNascimento;
        $user->estadoCivil  = $request->estadoCivil;
        $user->profissao    = $request->profissao;
        $user->zonaEleitoral = $request->zonaEleitoral;
        $user->secaoEleitoral = $request->secaoEleitoral;
        $user->RG           = $request->RG;

        $user->save();

        return redirect()->route('user-perfil')->with('update', 'Informações atualizadas com sucesso!');
    }

    public function updateEndereco(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->cep              = $request->cep;
        $user->endereco         = $request->endereco;
        $user->numero           = $request->numero;
        $user->bairro           = $request->bairro;
        $user->regiao           = $request->regiao;
        $user->tempoResidencia  = $request->tempoResidencia;

        $user->save();

        return redirect()->route('user-perfil')->with('update', 'Informações atualizadas com sucesso!');
    }

    public function updateAcesso(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->email        = $request->email;
        $user->password     = $request->password;

        $user->save();

        return redirect()->route('user-perfil')->with('update', 'Informações atualizadas com sucesso!');
    }

    public function updatePerfil(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/users'), $imageName);

            $user->image = $imageName;
        }

        $user->save();

        return redirect()->route('user-perfil')->with('update', 'Informações atualizadas com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->ativo = 0;
        $user->update();

        return redirect()->route('user-list')->with('sucess', 'Ok');
    }

    public function ativar($id)
    {
        $user = User::findOrFail($id);
        $user->ativo = 1;
        $user->update();

        return redirect()->route('user-list')->with('sucess', 'Ok');
    }
}
