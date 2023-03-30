<?php

namespace App\Services;

use App\Exceptions\CustomException;
use App\Models\UserModel;

class UserService
{
    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function RegisterNewUser(array $request)
    {
        $cpdDuplicated = $this->user->where('cpf', $request['cpf'])->first();

        if($cpdDuplicated){

            $message = 'CPF já Cadastrado';
            
            throw new CustomException($message, 400);
        }
       
        $request['senha'] = bcrypt($request['senha']);

        $this->user->create($request);
        
        return response()->json(["Cadastrado com Sucesso"], 201);
    }
}