<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'gastos';

    protected $fillable = [
        'gasto',
        'valor',
        'data_vencimento',
        'data_pagamento',
        'ano',       
    ];

    public function categoria()
    {
        return $this->hasMany(CategoriasGasto::class);
    }  

}
