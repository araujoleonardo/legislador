<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class validaTitulo implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $numeroTitulo = preg_replace('/[^0-9]/', '', $value); // remove caracteres não numéricos
        if (strlen($numeroTitulo) != 12) {
            return false;
        }
        
        $soma = ($numeroTitulo[7] * 2) + ($numeroTitulo[6] * 3) + ($numeroTitulo[5] * 4) + ($numeroTitulo[4] * 5) + ($numeroTitulo[3] * 6) + ($numeroTitulo[2] * 7) + ($numeroTitulo[1] * 8) + ($numeroTitulo[0] * 9);
        $resto = $soma % 11;
        $digito1 = ($resto == 0 || $resto == 1) ? 0 : (11 - $resto);
        
        $soma = ($digito1 * 2) + ($numeroTitulo[10] * 3) + ($numeroTitulo[9] * 4);
        $resto = $soma % 11;
        $digito2 = ($resto == 0 || $resto == 1) ? 0 : (11 - $resto);
        
        return substr($numeroTitulo, -2) == $digito1 . $digito2;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Título de Eleitor inválido';
    }
}
