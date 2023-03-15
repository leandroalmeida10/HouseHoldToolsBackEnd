<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewUser extends FormRequest
{

    public function rules()
    {
        $rules = [
        'nome'              => ['required', 'max:255'],
        'email'             => ['required', 'max:255'],
        'senha'             => ['required', 'min:8','max:255'],
        'cpf'               => ['required', 'min:11','max:11'],
        'cep'               => ['required', 'max:6'],
        'rua'               => ['required', 'max 255'],
        'numero'            => ['required', 'max:6'],
        'bairro'            => ['required', 'max:255'],
        'estado'            => ['required', 'min:2','max?2'],
        ];

        return $rules;
    }

    public function messages()
    {
        return [
        'nome.required'              => 'O nome é um campo obrigatório',
        'email.required'             => 'O email é um campo obrigatório',
        'senha.required'             => 'O senha é um campo obrigatório',
        'cpf.required'               => 'O cpf é um campo obrigatório',
        'cep.required'               => 'O cep é um campo obrigatório',
        'rua.required'               => 'O rua é um campo obrigatório',
        'numero.required'            => 'O número é um campo obrigatório',
        'bairro.required'            => 'O bairro é um campo obrigatório',
        'estado.required'            => 'O estado é um campo obrigatório',
        ];
    }
}