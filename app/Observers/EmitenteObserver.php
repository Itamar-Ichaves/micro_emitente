<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Emitente;

class EmitenteObserver
{
    /**
     * Handle the plan "creating" event.
     *
     * @param  \App\Models\Emitente 
     * @return void
     */
    public function creating(Emitente $emitente)
    {
               $emitente->uuid = Str::uuid();
    }

    /**
     * Handle the plan "updating" event.
     *
     * @param  \App\Models\Emitente  $emitente
     * @return void
     */
    public function updating(Emitente $emitente)
    {
        $emitente->url = Str::kebab($emitente->fantasia);
    }
}
