<?php
namespace App\Actions\Groups;

use App\Models\Group;

class NumberOfTelegramGroups
{

    public function __invoke()
    {
       $num_of_groups = Group::where([['social_type',1],['is_active',1]])->count();
        return $num_of_groups;
    }

}
