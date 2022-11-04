<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'aluno';

    protected $fillable = [
        'nome',
        'sexo',
        'data_nascimento',
        'numero_contato',
        'email',
        'rg',
        'cpf',
        'nome_mae',
        'nome_pai',
        'foto_aluno',
        'cep',
        'rua',
        'estado',
        'complemento',
        'numero_residencia',
        'cidade',         
    ];

    public function matricula()
    {
        return $this->hasMany(Matricula::class);
    }

}
