<?php
namespace App\Actions\Reports;

use App\Http\Requests\ReportRequest;
use App\Models\Group;
use App\Models\Report;

Class CreateReport{

    public function __invoke(ReportRequest $request)
    {
        $data = $request->validated();
        $report = Report::create($data);
        $group = Group::where('id',$data['group_id'])->first();
        $number_of_report = $group->report()->count();
        if ($number_of_report>5)
        {
            $group->is_active=false;
            $group->save();
        }
        return $report;
    }
}
