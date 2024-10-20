<?php

namespace App\Actions\Favorite;

use App\Enums\GroupsSocialEnum;
use App\Http\Resources\ListGroupResource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GetFavoriteUser
{
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'social_type' => [Rule::in(GroupsSocialEnum::getValues()), 'required'],
        ]);
        $group = $user->favorite()->where('social_type', $data['social_type'])->paginate(15);

        $resource = ListGroupResource::collection($group)->appends($request->query());

        return $resource;

    }
}
