<?php

namespace App\Http\Controllers;

use App\Actions\Reports\CreateReport;
use App\Actions\Reports\GetReport;
use App\Actions\Reports\GroupReportDetails;
use App\Http\Requests\ReportRequest;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return app(GetReport::class)();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportRequest $request)
    {
        app(CreateReport::class)($request);
        return sendResponse();
    }

    public function getReportDetails(Request $request)
    {

        $data = app(GroupReportDetails::class)($request);
        return sendResponse(data:$data);
    }
}
