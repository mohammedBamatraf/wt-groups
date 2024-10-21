<?php

namespace App\Actions\Groups;

use App\Http\Requests\ListGroupsRequest;
use App\Http\Resources\ListGroupResource;
use App\Models\Group;
use Illuminate\Database\Eloquent\Builder;

class GetGroups
{
    public function __invoke(ListGroupsRequest $request)
    {
        $data = $request->validated();
        /** @var User */
        $user = auth('api')->user();

        $group = Group::inRandomOrder()->when($user, function (Builder $query) use ($user) {

            return $query->whereDoesntHave('reports', function ($query) use ($user) {

                $query->where('user_id', $user->id);

            })
                ->whereNotIn('user_id', $user->blockedUsers()->pluck('id')->toArray())
                ->whereDoesntHave('usersWhoIgnored', function ($query) use ($user) {

                    $query->where('user_id', $user->id);

                });
        })->where(
            [
                [
                    'is_active',
                    1,
                ],
                [
                    'language_id',
                    $data['language_id'],
                ],
                [
                    'social_type',
                    $data['social_type'],
                ],
            ]
        )->select([
            'id',
            'name',
            'views',
        ])->when($data['category_id'], function ($query) use ($data) {
            return $query->where('category_id', $data['category_id']);
        })->with('media')->paginate(5);

        $resource = ListGroupResource::collection($group)->appends($request->query());

        return $resource;
    }
}
