<?php
namespace App\Actions\Groups;

use App\Models\Group;
use Illuminate\Http\Request;

class NumberOfTelegramGroups
{

    public function __invoke($data)
    {

       $num_of_groups = Group::where([['social_type','telegram'],['is_active',1],['language_id',$data['language_id']]])->count();
        return $num_of_groups;
    }

}
