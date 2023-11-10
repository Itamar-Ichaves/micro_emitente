<?php

namespace App\Services;

use Carlosfgti\MicroservicesCommon\Services\Traits\ConsumeExternalService;

class ConsultaCnpj
{
    use ConsumeExternalService;

    protected $url;
    protected $token;

    public function __construct()
    {
        $this->token = config('services.micro_02.token');
        $this->url = config('services.micro_02.url');
    }

    public function ConsultaCnpj(string $cnpj)
    {
        $response = $this->request('get', "https://eb7b-189-84-69-72.ngrok-free.app/api/cnpj/{$cnpj}");

        return response($response);
        //dd( $cnpj);
    }
}
