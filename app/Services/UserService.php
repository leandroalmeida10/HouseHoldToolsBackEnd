<?php

namespace App\Services;

use App\Models\UserModal;

class UserService
{
    private $user;

    public function __construct()
    {
        $this->user = new UserModal();
    }

    public function RegisterNewUser(array $request)
    {
        $registerNewUser = $this->user->create($request);

        return response()->json([], 201);
    }
}