<?php

namespace App\Actions\Groups;

use App\Http\Requests\GroupRequest;
use App\Http\Requests\ListGroupsRequest;
use App\Http\Resources\GroupResource;
use App\Http\Resources\ListGroupResource;
use App\Models\Group;

class GetGroups
{

    public function __invoke(ListGroupsRequest $request)
    {
        $data = $request->validated();
        $group = Group::inRandomOrder()->where([['is_active', 1], ['language_id', $data['language_id']], ['social_type', $data['social_type']]])->select(['id', 'name', 'views'])
            ->when($data['category_id'], function ($query) use ($data) {
                return $query->where('category_id', $data['category_id']);
            })->with('media')->paginate(15);

        $resource = ListGroupResource::collection($group)->appends($request->query());
        return $resource;
    }
}
