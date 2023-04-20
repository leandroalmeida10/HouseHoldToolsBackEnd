<?php

namespace App\Services;

use App\Exceptions\CustomException;
use App\Http\Resources\LoginUserResource;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class UserService
{

    use HasFactory, Notifiable, HasApiTokens;

    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function RegisterNewUser(array $request)
    {
        $User = $this->user->where('cpf', $request['cpf'])->first();

        if($User){

            $message = 'CPF já Cadastrado';
            
            throw new CustomException($message, 401);
        }
       
        $request['senha'] = bcrypt($request['senha']);
    
        $this->user->create($request);
        
        return response()->json(["Cadastrado com Sucesso"], 201);
    }

    public function EditUser(array $request)
    {
        $User = $this->user->where('cpf', $request['cpf'])->first();

        if(!$User){

            $message = 'CPF não foi cadastrado';
            
            throw new CustomException($message, 400);
        }

        $request['senha'] = bcrypt($request['senha']);

        $User->update($request);

        return response()->json(["Alterado com sucesso"], 200);
    
    }

    public function DeleteUser(array $request)
    {
        $User = $this->user->where('cpf', $request['cpf'])->first();

        if(!$User){

            $message = 'CPF não foi cadastrado';
            
            throw new CustomException($message, 401);
        }

        $User->delete('cpf', $request['cpf']);

        return response()->json(["Usuário excluído"], 200);
    }

    public function LoginUser(array $request)
    {
        $User = $this->user->where('cpf', $request['cpf'])->first();

        if(!$User){

            $message = 'CPF não foi cadastrado';
            
            throw new CustomException($message, 401);
        }

   

        $checkPassword = Hash::check($request['senha'], $User->senha);

        if (!$checkPassword) {
            throw new  CustomException('Senha incorreto', 401);
        }

        $token = $User->createToken('token')->accessToken;

        return (response()->json([$token]));

    }
}