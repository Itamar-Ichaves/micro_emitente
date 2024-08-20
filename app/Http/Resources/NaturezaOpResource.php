<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NaturezaOpResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            
            'token_company' => $this->token_company,
            'emitente' => $this->emitente,
            'natureza_da_operacao' => $this->natureza_da_operacao
        ];
    }
}
