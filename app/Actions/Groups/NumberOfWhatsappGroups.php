<?php

namespace App\Actions\Groups;

use App\Models\Group;

class NumberOfWhatsappGroups
{
    public function __invoke($data)
    {
        $num_of_groups = Group::where([['social_type', 'whatsapp'], ['is_active', 1], ['language_id', $data['language_id']]])->count();

        return $num_of_groups;
    }
}
