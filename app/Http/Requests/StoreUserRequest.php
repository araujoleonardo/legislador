<?php

namespace App\Http\Requests;

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
            'name'              => 'required',
            'email'             => 'required',
            'password'          => 'required',
            'sexo'              => 'required',
            'dataNascimento'    => 'required',
            'nomeMae'           => 'required',
            'nomePai'           => 'required',
            'estadoCivil'       => 'required',
            'profissao'         => 'required',
            'tituloEleitor'     => 'required',
            'zonaEleitoral'     => 'required',
            'secaoEleitoral'    => 'required',
            'RG'                => 'required',
            'CPF'               => 'required',
            'cep'               => 'required',
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
            'email.required'            => 'O campo email é obrigatório',
            'password.required'         => 'O campo senha é obrigatório',
            'sexo.required'             => 'O campo sexo é obrigatório',
            'dataNascimento.required'   => 'O campo data de nascimento é obrigatório',
            'nomeMae.required'          => 'O campo nome da mãe é obrigatório',
            'nomePai.required'          => 'O campo nome do pai é obrigatório',
            'estadoCivil.required'      => 'O campo estado civil é obrigatório',
            'profissao.required'        => 'O campo profissão é obrigatório',
            'tituloEleitor.required'    => 'O campo titulo de eleitor é obrigatório',
            'zonaEleitoral.required'    => 'O campo zona eleitoral é obrigatório',
            'secaoEleitoral.required'   => 'O campo secão eleitoral é obrigatório',
            'RG.required'               => 'O campo RG é obrigatório',
            'CPF.required'              => 'O campo CPF é obrigatório',
            'cep.required'              => 'O campo CEP é obrigatório',
            'endereco.required'         => 'O campo endereço é obrigatório',
            'bairro.required'           => 'O campo bairro é obrigatório',
            'id_regiao.required'        => 'O campo regiao é obrigatório',
            'tempoResidencia.required'  => 'O campo tempo de residência é obrigatório',
            'image.required'            => 'A imagem de perfil é obrigatória',
        ];
    }
}
