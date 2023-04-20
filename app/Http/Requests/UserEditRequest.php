<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserEditRequest extends FormRequest
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
            'cpf'               => ['required', 'min:11', 'max:11'],
            'nome'              => ['max:255'],
            'email'             => ['max:255'],            
            'cep'               => ['min:8'],
            'rua'               => ['max:255'],
            'numero'            => ['max:255'],
            'bairro'            => ['max:255'],
            'estado'            => ['max:255'],
            'senha'             => ['min:6']
        ];
    }

    public function messages()
    {
        return[
            'cpf.required'      => 'CPF é um campo obrigatório',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }
}
