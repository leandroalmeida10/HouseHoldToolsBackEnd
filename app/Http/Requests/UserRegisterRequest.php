<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'              => ['required'],
            'cpf'               => ['required', 'min:13', 'max:13'],
            'email'             => ['required'],
            'cep'               => ['required', 'min:8'],
            'rua'               => ['required'],
            'numero'            => ['required'],
            'bairro'            => ['required'],
            'estado'            => ['required'],
            'password'          => ['required', 'min:6'],
            'confirmPassword'   => ['required', 'min:6']
        ];
    }

    public function messages()
    {
        return[
            'name.required'                 => 'Nome é um campo obrigatório',
            'cpf.required'                  => 'CPF é um campo obrigatório',
            'email.required'                => 'Email é um campo obrigatório',
            'cep.required'                  => 'CEP é um campo obrigatório',
            'rua.required'                  => 'Rua é um campo obrigatório',
            'numero.required'               => 'Número da residencia é obrigatório',
            'bairro.required'               => 'Bairro é um campo obrigatório',
            'estado.required'               => 'Estado é um campo obrigatório',
            'senha.required'                => 'Senha é um campo obrigatório',
            'confirmPassword.required'      => 'Confirmação de senha é campo obrigatório'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }
}
