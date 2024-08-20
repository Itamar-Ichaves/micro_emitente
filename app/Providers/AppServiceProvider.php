<?php

namespace App\Providers;

use App\Models\{
    
    Emitente,
    NaturezaOp

};


use App\Observers\{
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
      
        NaturezaOp::observe(NaturezaOperacaoObserver::class);
    }
}
