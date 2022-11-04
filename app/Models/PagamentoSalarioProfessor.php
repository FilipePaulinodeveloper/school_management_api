<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoSalarioProfessor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pagamentoSalario';

    protected $fillable = [
        'professor_id',
        'valor_salario',
        'data_pagamento',
        'data_pago',
        'forma_pagamento',
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

}
