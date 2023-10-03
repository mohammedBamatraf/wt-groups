<?php

namespace App\Actions\Auth;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterAction
{
    public function __invoke(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user=User::query()->create();
        $token=$user->$userToken = $user->createToken('User Token');
        return
    }
}
