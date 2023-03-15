<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewUser;
use App\Http\Resources\CadastroNewUsersResources;
use App\Services\CadastroUsersServices;

class CadastroNewUsersController extends Controller
{
    protected $model;

public function __construct(CadastroUsersServices $cadastroUsersServices)
{
    $this->model = $cadastroUsersServices;
}

public function store(StoreNewUser $request)
{
    $request = $request->all();
    return $request;
    $users = $this->model->CadastroUsersServices($request);

    if($users['user'] === 'Usuário Cadastrado') {
        return response()->json($users);
    }

    return new CadastroNewUsersResources($users);
}
}