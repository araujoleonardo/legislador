<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class validaCpf implements Rule
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
        $cpf = preg_replace('/[^0-9]/', '', $value); // remove qualquer caractere que não seja número
        if (strlen($cpf) != 11 || preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false; // CPF deve ter 11 dígitos e não pode ter todos os números iguais
        }
        $sum = 0;
        for ($i = 1; $i <= 9; $i++) {
            $sum += (int)substr($cpf, $i - 1, 1) * (11 - $i);
        }
        $remainder = ($sum * 10) % 11;
        if ($remainder == 10 || $remainder == 11) {
            $remainder = 0;
        }
        if ($remainder != (int)substr($cpf, 9, 1)) {
            return false; // o primeiro dígito verificador está incorreto
        }
        $sum = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum += (int)substr($cpf, $i - 1, 1) * (12 - $i);
        }
        $remainder = ($sum * 10) % 11;
        if ($remainder == 10 || $remainder == 11) {
            $remainder = 0;
        }
        if ($remainder != (int)substr($cpf, 10, 1)) {
            return false; // o segundo dígito verificador está incorreto
        }
        return true; // CPF é válido
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Cpf inválido';
    }
}
