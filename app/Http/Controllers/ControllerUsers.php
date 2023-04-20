<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDeleteRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Services\UserService;

class ControllerUsers extends Controller
{

    private $userService;

    public function __construct()
    {
      $this->userService = new UserService();
    }

    public function register(UserRegisterRequest $request)
    {
      return $this->userService->RegisterNewUser($request->all());
    }

    public function edit(UserEditRequest $request)
    {
      return $this->userService->EditUser($request->all());
    }

    public function delete(UserDeleteRequest $request)
    {
      return $this->userService->DeleteUser($request->all());
    }

    public function login(UserLoginRequest $request)
    {
      return $this->userService->LoginUser($request->all());
    }


}
