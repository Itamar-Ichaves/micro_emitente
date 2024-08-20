<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmitenteResource extends JsonResource
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
            'razao_social' => $this->razao_social,  
            'nome' => $this->nome, 
            'description' => $this->description 
        ];
    }
}
