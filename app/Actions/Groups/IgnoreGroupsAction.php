<?php

namespace App\Actions\Groups;

use App\Exceptions\LogicException;
use App\Models\Group;
use App\Models\User;

class IgnoreGroupsAction
{
    public function __invoke(string $group_id)
    {
        $group = Group::query()->findOrFail($group_id);
        /** @var User */
        $user = auth('api')->user();
        if ($user->id === $group->user_id) {
            throw new LogicException('You can not ignore your group');
        }
        $user->ignoredGroups()->syncWithoutDetaching([$group->id]);
    }
}
