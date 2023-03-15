<?php
namespace App\Services;

use App\Models\User;

class CadastroUsersServices
{

    protected $model;


    public function CadastroUsersServices(array $data)
    {
        if(User::where('cpf', $data['cpf'])->first()){
            $msg = [
                'user' => 'Usuário Cadastrado'
            ];
            return $msg;
        }

        $newUserRegister = $this->model->create($data);
        return $newUserRegister;
    }

}