<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'parcelas';

    protected $fillable = [
       'valor_parcelas',
       'data_pagamento',
       'data_vencimento',       
       'num_parcelas',
       'matricula_turma_id',
       'matricula_aluno_id',
    ];

    public function matricula()
    {
        return $this->belongsTo(Matricula::class);
    }


}
