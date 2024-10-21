<?php

namespace App\Actions\Admin;

use App\Exceptions\LogicException;
use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin;

class AdminLogin
{
    public function __invoke(AdminLoginRequest $request)
    {
        $data = $request->validated();
        $admin = Admin::where('email', $data['email'])->first();

        if (! $admin || password_verify($data['password'], $admin->password)) {
            throw new LogicException(__('responses.login.failed'));
        }
        $admin->token = $admin->createToken('admin token')->accessToken;

        return $admin;
    }
}
