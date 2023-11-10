<?php

namespace App\Providers;

use App\Models\{
    certificado_digital,
    Emitente,
    NaturezaDaOperacao

};


use App\Observers\{
    CertificadoObserver,
    EmitenteObserver,
    NaturezaOperacaoObserver
};

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Emitente::observe(EmitenteObserver::class);
        certificado_digital::observe(CertificadoObserver::class);
        NaturezaDaOperacao::observe(NaturezaOperacaoObserver::class);
    }
}
