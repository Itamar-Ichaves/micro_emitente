<?php

namespace App\Observers;

use App\Models\NaturezaDaOperacao;
use App\Models\NaturezaOp;
use Illuminate\Support\Str;

class NaturezaOperacaoObserver
{
    public function creating(NaturezaOp $client)
    {
        $client->id =  (string) Str::uuid();
    }
}
