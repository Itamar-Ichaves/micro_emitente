<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cidades extends Model
{
    use HasFactory;

    protected $fillabe = [
        'id_estado',
        'nome_cidade',
        'ibge_cidade'
    ];
}
