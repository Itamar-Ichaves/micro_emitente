<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaturezaDaOperacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo_interno',
        'descrição',
        'tipo',
        'finNfe',
        'indPres',
        'devolução',
        'padrão'
    ];
}
