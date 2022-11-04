<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'turma';

    protected $fillable = [ 
        'nome',
        'modalidade',
        'inicio_aulas',
        'termino_aulas',
        'status',
        'professor_id',
        'curso_id',
        'preco_curso',
        'dia_aula',
        'qtd_aulas',
        'qtd_aulas_assistidas',
        'turno_aulas',
        'horaio_aula',
    ];

    
    public function matricula()
    {
        return $this->hasMany(Matricula::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
