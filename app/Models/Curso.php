<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $table = 'curso';

    protected $fillable = [
        'foto_curso',
        'nome',
        'carga_horaria', 
        'preco',
        'nivel',
        'prerequisitos',
        'description',
        'status'
    ];

    public function turmas() 
    {
        return $this->hasMany(Turma::class);
    }



}
