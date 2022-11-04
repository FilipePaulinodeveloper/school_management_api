<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'matricula';

    protected $fillable = [
       'turma_id',
       'aluno_id',
       'preco_curso',       
       'desconto',
       'valor_final',
       'qtd_parcelas',
    ];

    public function aluno()
    {
        return $this->belongsToMany(Aluno::class);        
    }
    
    public function turma()
    {
        return $this->belongsToMany(Turma::class);        
    }

    public function parcelas()
    {
        return $this->hasMany(Parcelas::class);        
    }
    
}
