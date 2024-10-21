<?php

namespace App\Actions\Auth;

class DeleteAccount
{
    public function __invoke()
    {
        $user = auth()->user();
        if ($user) {
            $user->delete();
        }
    }
}
