<?php

namespace App\Observers;

use Illuminate\Support\Str;

use App\Models\certificado_digital;

class CertificadoObserver
{
    
    /**
     * Handle the client "creating" event.
     *
     * @param  \App\Models\certificado_digital
     * @return void
     */
    public function creating(certificado_digital $client)
    {
        $client->uuid = Str::uuid();
    }

    /**
     * Handle the plan "updating" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function updating(certificado_digital $client)
    {
        
    }
}
