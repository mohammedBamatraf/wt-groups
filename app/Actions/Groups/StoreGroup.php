<?php
namespace App\Actions\Groups;

use App\Http\Requests\GroupRequest;
use App\Models\Group;

class StoreGroup
{

    public function __invoke(GroupRequest $request)
    {
        $data = $request->validated();
        $user_id=auth()->user()->id;
        $group = Group::create($data+['is_active'=>true,'views' => 0,'user_id' =>$user_id]);

        if($request->hasFile('image'))
        {
            $group->addMedia($request->image)->toMediaCollection('image group');
        }
        return $group;

    }

}
