<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cest extends Model
{
    use HasFactory;

   protected $fillable = [
    'legal_tbc',
    'ncm_tbc',
    'descricao_tbc'
   ];
}
