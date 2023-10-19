<?php
namespace App\Actions\Reports;

use App\Http\Requests\ReportRequest;
use App\Http\Resources\ReportResource;
use App\Models\Report;

Class GetReport{

    public function __invoke()
    {
        $reports = ReportResource::collection(Report::all());
        return $reports;
    }
}
