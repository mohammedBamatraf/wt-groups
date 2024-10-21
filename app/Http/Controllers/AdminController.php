<?php

namespace App\Http\Controllers;

use App\Actions\Admin\AdminLogin;
use App\Actions\Admin\AdminUpdateGroupAction;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminUpdateGroupRequest;
use App\Http\Resources\AdminGroupResource;
use App\Http\Resources\AdminResource;

class AdminController extends Controller
{
    public function adminLogin(AdminLoginRequest $request)
    {
        $ِadmin = app(AdminLogin::class)($request);

        return sendResponse(data: AdminResource::make($ِadmin));
    }

    public function updateGroup(AdminUpdateGroupRequest $request)
    {
        $data = AdminGroupResource::make(app(AdminUpdateGroupAction::class)($request));

        return sendResponse(data: $data);
    }
}
