<?php

namespace App\Http\Controllers;

use App\Actions\Admin\AdminLogin;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Resources\AdminResource;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function adminLogin(AdminLoginRequest $request)
    {
        $ِadmin = app(AdminLogin::class)($request);
        // $data =
        return sendResponse(data:AdminResource::make($ِadmin));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
