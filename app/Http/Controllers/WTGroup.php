<?php

namespace App\Http\Controllers;

use App\Actions\Groups\GetGroups;
use App\Actions\Groups\GetUserGroups;
use App\Actions\Groups\NumberOfTelegramGroups;
use App\Actions\Groups\NumberOfWhatsappGroups;
use App\Actions\Groups\ShowGroupDetails;
use App\Actions\Groups\StoreGroup;
use App\Actions\Groups\UpdateGroup;
use App\Http\Requests\GroupRequest;
use App\Http\Requests\ListGroupsRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Http\Resources\GroupDetailsResource;
use App\Models\Group;
use Illuminate\Http\Request;

class WTGroup extends Controller
{

    public function index(ListGroupsRequest $request)
    {
        return sendResponse(data:app(GetGroups::class)($request));
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
        return sendResponse(data:$data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $data = app(ShowGroupDetails::class)($group);
        return sendResponse(data:$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $data = GroupDetailsResource::make(app(UpdateGroup::class)($request,$group)) ;

        return sendResponse(data:$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group ->delete();
        return sendResponse();
    }

    public function getUserGroups(Request $request)
    {
        return sendResponse(data:app(GetUserGroups::class)($request));
    }
}
