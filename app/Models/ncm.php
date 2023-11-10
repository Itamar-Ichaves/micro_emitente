<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ncm extends Model
{
    use HasFactory;

    protected $fillable = [

        'cod_ncm',
        'nome_ncm'
    ];
}
