<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:3'],
            'content' => ['required', 'min:3']
        ];
    }

    public function messages()
    {
        return [
            'title.required'       => 'Campo obrigatório',
            'title.min'            => 'Título muito curto',
            'content.required'     => 'Campo obrigatório',
            'content.min'          => 'Conteúdo deve ter mais de uma palavra',
        ];
    }
}
