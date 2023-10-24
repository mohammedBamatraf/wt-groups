<?php

namespace App\Actions\Favorite;

use App\Http\Requests\FavoriteRequest;

class SaveGroups
{
    public function __invoke(FavoriteRequest $favoriteRequest)
    {
        $data = $favoriteRequest->validated();
        $user = auth()->user();
        if(!$data['is_favorite'])
        {
            $user->favorite()->detach($data['group_id']);
            return false;
        }

        $user->favorite()->syncWithoutDetaching($data['group_id']);
        return true;

    }
}
