<?php

namespace App\Actions\Reports;

use App\Http\Resources\GroupReportDetailsResource;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupReportDetails
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'group_id' => ['required', 'exists:groups,id'],
        ]);
        $group = Group::where('id', $data['group_id'])->first();

        return GroupReportDetailsResource::make($group);
    }
}
