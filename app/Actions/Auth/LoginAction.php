<?php

namespace App\Actions\Auth;

use App\Exceptions\LogicException;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginAction
{
    public function __invoke(LoginRequest $request)
    {
        $data = $request->validated();
        $user = User::where('email', $data['email'])->first();

        if (! $user || ! password_verify($data['password'], $user->password)) {
            throw new LogicException(__('responses.login.failed'), 403);
        }

        return $user;
    }
}
