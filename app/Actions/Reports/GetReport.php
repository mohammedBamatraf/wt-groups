<?php

namespace App\Actions\Reports;

use App\Http\Resources\ReportResource;
use App\Models\Report;

class GetReport
{
    public function __invoke()
    {
        $reports = ReportResource::collection(Report::all());

        return $reports;
    }
}
