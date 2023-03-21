<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'sexo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'sexo' => $data['sexo'],
            'dataNascimento' => $data['dataNascimento'],
            'nomeMae' => $data['nomeMae'],
            'nomePai' => $data['nomePai'],
            'estadoCivil' => $data['estadoCivil'],
            'profissao' => $data['profissao'],
            'tituloEleitor' => $data['tituloEleitor'],
            'zonaEleitoral' => $data['zonaEleitoral'],
            'secaoEleitoral' => $data['secaoEleitoral'],
            'RG' => $data['RG'],
            'CPF' => $data['CPF'],
            'cep' => $data['cep'],
            'endereco' => $data['endereco'],
            'numero' => $data['numero'],
            'bairro' => $data['bairro'],
            'regiao' => $data['regiao'],
            'tempoResidencia' => $data['tempoResidencia'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
