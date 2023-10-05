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
        $group = Group::where([['is_active',1],['language_id',$data['language_id']]])->select(['id', 'name','views'])->when($data['category_id']==null, function ($query) use($data) {
            return $query->where('category_id',$data['category_id']);})->get();

        $resource = ListGroupResource::collection($group);
        return sendResponse(data:$resource);
    }

}
