<?php
namespace App\Actions\Groups;

use App\Models\Group;

class NumberOfTelegramGroups
{

    public function __invoke()
    {
       $num_of_groups = Group::where([['social_type','telegram'],['is_active',1]])->count();
        return $num_of_groups;
    }

}
