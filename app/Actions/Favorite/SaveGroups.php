<?php

namespace App\Actions\Favorite;

use App\Http\Requests\FavoriteRequest;
use App\Models\User;

class SaveGroups
{
    public function __invoke(FavoriteRequest $favoriteRequest)
    {

        $data = $favoriteRequest->validated();

        /** @var User $user */
        $user = auth()->user();
        if (! $data['is_favorite']) {
            $user->favorite()->detach($data['group_id']);

            return false;
        }

        $user->favorite()->syncWithoutDetaching($data['group_id']);

        return true;
    }
}
