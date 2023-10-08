<?php
namespace App\Actions\Reports;

use App\Http\Requests\ReportRequest;
use App\Models\Report;

Class CreateReport{

    public function __invoke(ReportRequest $request)
    {
        $data = $request->validated();
        $report = Report::create($data);
        return $report;
    }
}
