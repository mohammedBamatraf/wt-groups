<?php
namespace App\Actions\Groups;
use App\Http\Resources\GroupDetailsResource;
use App\Models\Group;

class ShowGroupDetails
{

    public function __invoke(Group $group)
    {
        $group->views = $group->views +1;
        $group->save();
        $data  = GroupDetailsResource::make($group);
        return $data;
    }

}
