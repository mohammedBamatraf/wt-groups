<?php

namespace App\Actions\Favorite;

use App\Enums\GroupsSocialEnum;
use App\Http\Requests\FavoriteRequest;
use App\Http\Resources\ListGroupResource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GetFavoriteUser
{
    public function __invoke(Request $request)
    {
        $user =auth()->user();
        $data = $request->validate([
            'social_type' => [Rule::in(GroupsSocialEnum::getValues()),'required']
        ]);
        $group =$user->favorite()->where('social_type', $data['social_type'])->get();;

        $resource = ListGroupResource::collection($group);
        return $resource;

    }
}
