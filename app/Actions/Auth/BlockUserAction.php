<?php

namespace App\Actions\Auth;

use App\Exceptions\LogicException;
use App\Models\User;

class BlockUserAction
{
    public function __invoke(string $blocked_user_id): void
    {
        /** @var User */
        $user = auth('api')->user();
        $blocked_user = User::query()->findOrFail($blocked_user_id);
        if (! $blocked_user) {
            throw new LogicException(__('responses.not-found'));
        }

        if ($blocked_user_id === $user->id) {
            throw new LogicException(__('you can not block your self'));
        }

        $user->blockedUsers()->syncWithoutDetaching($blocked_user_id);
    }
}
