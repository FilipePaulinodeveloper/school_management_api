<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoriaGasto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'subcategoria';

    protected $fillable = [
        'subcategoria',
        'categoria_id',      
    ];

    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }
}
