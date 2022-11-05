<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarioEvento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'calendario_eventos';

    protected $fillable = [
        'titulo_envento',
        'categoria',
        'data_inicio',
        'data_termino',
        'dia_todo',
        'descricao',
        'link'
    ];

}
