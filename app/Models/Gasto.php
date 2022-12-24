<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'gastos';

    protected $fillable = [
        'nome_gasto',
        'valor',
        'data_vencimento',
        'data_pagamento',
        'ano',       
    ];

    public function categorias()
    {
        // return $this->hasMany(CategoriasGasto::class);
        return $this->belongsToMany(CategoriasGasto::class);
    }  

}
