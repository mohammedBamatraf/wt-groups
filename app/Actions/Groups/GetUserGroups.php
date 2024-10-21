<?php

namespace App\Actions\Groups;

use App\Enums\GroupsSocialEnum;
use App\Http\Resources\ListGroupResource;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GetUserGroups
{
    public function __invoke(Request $request)
    {

        $data = $request->validate([
            'social_type' => [Rule::in(GroupsSocialEnum::getValues()), 'required'],
        ]);
        $user = auth()->user()->id;

        $group = Group::where([['social_type', $data['social_type']], ['user_id', $user]])->select(['id', 'name', 'views'])->paginate(15);

        $resource = ListGroupResource::collection($group)->appends($request->query());

        return $resource;
    }
}
