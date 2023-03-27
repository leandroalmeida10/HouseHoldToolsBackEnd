<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Http\Services\UserService;

class ControlUsers extends Controller
{

    private $userService;

    public function __construct()
    {
      $this->userService = new UserService;
    }

    public function register(UserRegisterRequest $request)
    {
      return $this->userService->RegisterNewUser($request->all());
    }

    public function edit()
    {
      echo "Hello Edit";
    }

    public function delete()
    {
      echo "Hello Delete";
    }

    public function login(){
      echo "Hello Login";
    }


}
