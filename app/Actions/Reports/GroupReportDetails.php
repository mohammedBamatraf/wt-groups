<?php
namespace App\Actions\Reports;

use App\Http\Requests\ReportRequest;
use App\Http\Resources\GroupReportDetailsResource;
use App\Http\Resources\ReportResource;
use App\Models\Group;
use App\Models\Report;
use Illuminate\Http\Request;

Class GroupReportDetails{

    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'group_id' =>['required','exists:groups,id']]);
        $group = Group::where('id',$data['group_id'])->first();

        // dd($group);
        return GroupReportDetailsResource::make($group);
    }
}
