<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CadastroNewUsersResources extends JsonResource
{
    public function toArray($request)
    {
        return[
            'id'            => $this->id,
            'identify'      => $this->identify, 
            'nome'          => $this->nome,
            'email'         => $this->email,
            'senha'         => $this->senha,
            'cpf'           => $this->cpf,
            'cep'           => $this->cep,
            'rua'           => $this->rua,
            'numero'        => $this->numero,
            'bairro'        => $this->bairro,
            'estado'        => $this->estado,
        ];
    }
}