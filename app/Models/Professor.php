<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    public $timestamps = false;    

    protected $fillable = [
        'nome',
        'sexo',
        'data_nascimento',
        'numero_contato',
        'email',
        'rg',
        'cpf',
        'foto_professor',        
        'cep',
        'rua',
        'estado',
        'complemento',
        'numero_residencia',
        'cidade',
        'curso_formacao',
        'local_formacao',
        'tempo_experiencia',
        'local_trabalho',
        'descricao-academica',
        'status',
        'tipo_conta',
        'banco',
        'tipo_chave_pix',
        'chave_pix',
        'agencia',        
    ];

    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }

    public function salarios()
    {
        return $this->hasMany(PagamentoSalarioProfessor::class);
    }

}
