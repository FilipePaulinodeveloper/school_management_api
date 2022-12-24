<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaGasto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'categoria_do_gasto';

    protected $fillable = [        
        'nome_categoria', 
    ];

    public function gastos()
    {
        // return $this->hasMany(Gastos::class);
        return $this->belongsToMany(Gastos::class);
    }
    public function subcategoria()
    {
        return $this->hasMany(Subcategoria::class);
    }

}
