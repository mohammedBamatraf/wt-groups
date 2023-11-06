<?php

namespace App\Actions\Admin;

use App\Exceptions\LogicException;
use App\Http\Requests\AdminUpdateGroupRequest;
use App\Jobs\VipJob;
use App\Models\Group;
use Carbon\Carbon;

class AdminUpdateGroupAction
{

    public function __invoke(AdminUpdateGroupRequest $request)
    {
        $data = $request->validated();
        $group = Group::where('id', $data['id'])->first();
        if($group){
            $group->update($data);
            if($request->hasFile('image'))
            {
                $group->addMedia($request['image'])->toMediaCollection('image group');
            }
            if($request->vip_type)
            {
                switch($data['vip_type'])
                {
                    case 1:
                        $group->update(['vip' => 1]);
                        $delay = Carbon::now()->addHours(5);
                        VipJob::dispatch($group)->delay($delay);
                        break;

                    case 2:
                        $group->update(['vip' => 2]);
                        break;

                    case 0:
                        $group->update(['vip' => 0]);
                        break;

                }
            }
        }
        else{
            throw new LogicException('response.not-found');
        }
        $group->refresh();

        return $group;

    }
}
