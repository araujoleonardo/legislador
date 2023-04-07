<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'sexo',
        'dataNascimento',
        'nomeMae',
        'nomePai',
        'estadoCivil',
        'profissao',
        'tituloEleitor',
        'zonaEleitoral',
        'secaoEleitoral',
        'RG',
        'CPF',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'id_regiao',
        'tempoResidencia',
        'perfil',
        'image',
        'ativo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'id_regiao');
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
