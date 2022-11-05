<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaAula extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'dia_aula';

    protected $fillable = [        
        'turma_id',
        'dia',
        'horario_aula'
    ];

    public function matricula()
    {
        return $this->belongsTo(Turma::class);
    }
}
