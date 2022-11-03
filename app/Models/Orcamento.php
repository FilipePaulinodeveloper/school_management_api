<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'orcamento';

    protected $fillable = [
        'valor',
        'ano'
    ];

}
