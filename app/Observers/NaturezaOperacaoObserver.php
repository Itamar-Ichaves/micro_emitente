<?php

namespace App\Observers;

use App\Models\NaturezaDaOperacao;

use Illuminate\Support\Str;

class NaturezaOperacaoObserver
{
    public function creating(NaturezaDaOperacao $client)
    {
        $client->uuid = Str::uuid();
    }
}
