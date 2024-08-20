<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CertificadoDigital extends Model
{
    use HasFactory;

    // Define o tipo da chave primária como UUID
    protected $keyType = 'uuid';
    public $incrementing = false;

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'token_company',
        'emitente',
        'certificado_nome_arquivo',
        'arquivo_binario',
        'senha',
        'cnpj',
        'serial',
        'inicio',
        'expiracao',
        'identificado',
        'idctx',
    ];

    // Define os campos que devem ser tratados como binários
    protected $casts = [
        'arquivo_binario' => 'binary',
    ];

    // Gera automaticamente o UUID na criação de um novo registro
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
