<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class icms_desoneracao extends Model
{
    use HasFactory;

    protected $fillabla = [
        'codigo_icms_desoneracao',
        'desc_icms_desoneracao'
    ];
}
