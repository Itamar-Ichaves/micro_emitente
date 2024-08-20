<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaturezaOp extends Model
{
    use HasFactory;
    protected $fillable = [
        'token_company',
        'emitente',
        'titulo_interno',
        'natureza_da_operacao',
        'tipo',
        'finNfe',
        'indPres',
        'devolução',
        'padrão'
    ];
}
