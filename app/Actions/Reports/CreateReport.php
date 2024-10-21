<?php

namespace App\Actions\Reports;

use App\Exceptions\LogicException;
use App\Http\Requests\ReportRequest;
use App\Models\Group;
use App\Models\Report;

class CreateReport
{
    public function __invoke(ReportRequest $request)
    {
        $user = auth('api')->user();
        $data = array_merge(
            $request->validated(),
            ['user_id' => $user->id]
        );

        $group = Group::where('id', $data['group_id'])->first();

        if ($group->user_id === $user->id) {
            throw new LogicException(__('you can not report your groups'));
        }

        $report = Report::create($data);

        $number_of_report = $group->reports()->count();
        if ($number_of_report > 5) {
            $group->is_active = false;
            $group->save();
        }

        return $report;
    }
}
