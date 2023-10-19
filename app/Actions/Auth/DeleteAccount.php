<?php
namespace App\Actions\Auth;

use App\Exceptions\LogicException;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class DeleteAccount
{
    public function __invoke()
    {
        $user= auth()->user();
        if($user)
        {
            $user->delete();
        }
    }
}
