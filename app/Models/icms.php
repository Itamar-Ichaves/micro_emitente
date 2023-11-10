<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class icms extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_icms' ,
        'desc_icms'
    ];    
    

}
