<?php

namespace App\Http\Requests;

use App\Rules\validaCpf;
use App\Rules\validaTitulo;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|string|min:10',
            'email'             => 'required|email|unique:users',
            'password'          => 'required|confirmed',
            'terms'             => 'required',
            'sexo'              => 'required',
            'dataNascimento'    => 'required',
            'nomeMae'           => 'required|string|min:10',
            'nomePai'           => 'required|string|min:10',
            'estadoCivil'       => 'required',
            'profissao'         => 'required',
            'tituloEleitor'     => ['required', new validaTitulo],
            'zonaEleitoral'     => 'required|integer',
            'secaoEleitoral'    => 'required|integer',
            'RG'                => 'required|min:5',
            'CPF'               => ['required', new validaCpf],
            'cep'               => 'required|min:9',
            'endereco'          => 'required',
            'bairro'            => 'required',
            'id_regiao'         => 'required',
            'tempoResidencia'   => 'required',
            'image'             => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'O campo nome é obrigatório',
            'name.string'               => 'O campo nome deve ser texto',
            'name.min'                  => 'O campo nome deve ser conpleto',
            'email.required'            => 'O campo email é obrigatório',
            'email.email'               => 'O campo email não tem o formato correto',
            'email.unique'              => 'O email já está cadastrado',
            'password.required'         => 'O campo senha é obrigatório',
            'password.confirmed'        => 'A senha deve ser confirmada',
            'terms.required'            => 'Os termos devem ser aceitos',
            'sexo.required'             => 'O campo sexo é obrigatório',
            'dataNascimento.required'   => 'O campo data de nascimento é obrigatório',
            'nomeMae.required'          => 'O campo nome da mãe é obrigatório',
            'nomeMae.string'            => 'O campo nome da mãe deve ser texto',
            'nomeMae.min'               => 'O campo nome da mãe deve ser conpleto',
            'nomePai.required'          => 'O campo nome ddo pai é obrigatório',
            'nomePai.string'            => 'O campo nome ddo pai deve ser texto',
            'nomePai.min'               => 'O campo nome ddo pai deve ser conpleto',
            'estadoCivil.required'      => 'O campo estado civil é obrigatório',
            'profissao.required'        => 'O campo profissão é obrigatório',
            'tituloEleitor.required'    => 'O campo titulo de eleitor é obrigatório',
            'zonaEleitoral.required'    => 'O campo zona eleitoral é obrigatório',
            'zonaEleitoral.integer'     => 'O campo zona eleitoral deve conter apenas números',
            'secaoEleitoral.required'   => 'O campo secão eleitoral é obrigatório',
            'secaoEleitoral.integer'    => 'O campo secão eleitoral deve conter apenas números',
            'RG.required'               => 'O campo RG é obrigatório',
            'RG.min'                    => 'O campo RG está incompleto',
            'CPF.required'              => 'O campo CPF é obrigatório',
            'cep.required'              => 'O campo CEP é obrigatório',
            'cep.min'                   => 'O campo CEP está incompleto',
            'endereco.required'         => 'O campo endereço é obrigatório',
            'bairro.required'           => 'O campo bairro é obrigatório',
            'id_regiao.required'        => 'O campo regiao é obrigatório',
            'tempoResidencia.required'  => 'O campo tempo de residência é obrigatório',
            'image.required'            => 'A imagem de perfil é obrigatória',
        ];
    }
}
