<?php

namespace App\Actions\Groups;

use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;

class UpdateGroup
{
    public function __invoke(UpdateGroupRequest $request, Group $group)
    {
        $data = $request->validated();

        $update = $group->update($data);

        if ($request->hasFile('image')) {
            $group->addMedia($request->image)->toMediaCollection('image group');
        }

        return $group;

    }
}
