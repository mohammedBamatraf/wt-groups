<?php

namespace App\Http\Controllers;

use App\Actions\Groups\GetGroups;
use App\Actions\Groups\NumberOfTelegramGroups;
use App\Actions\Groups\NumberOfWhatsappGroups;
use App\Actions\Groups\StoreGroup;
use App\Http\Requests\GroupRequest;
use App\Http\Requests\ListGroupsRequest;
use Illuminate\Http\Request;

class WTGroup extends Controller
{

    public function index(ListGroupsRequest $request)
    {
        return app(GetGroups::class)($request);
    }
    public function numberOfWhatsappGroups()
    {
        $data = app(NumberOfWhatsappGroups::class)();

        return sendResponse(data:$data);
    }

    public function numberOfTelegramGroups()
    {
        $data = app(NumberOfTelegramGroups::class)();

        return sendResponse(data:$data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {
        $data = app(StoreGroup::class)($request);
        return sendResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
