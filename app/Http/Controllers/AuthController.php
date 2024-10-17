<?php

namespace App\Http\Controllers;

use App\Actions\Auth\BlockUserAction;
use App\Actions\Auth\DeleteAccount;
use App\Actions\Auth\LoginAction;
use App\Actions\Auth\RegisterAction;
use App\Actions\Auth\UnblockUserAction;
use App\Http\Requests\BlockUserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(LoginRequest $request)
    {
        $data = UserResource::make(app(LoginAction::class)($request));

        return sendResponse(data: $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(RegisterRequest $request)
    {

        $data = UserResource::make(app(RegisterAction::class)($request));
        return sendResponse(data: $data,);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return sendResponse();
    }

    public function deleteAccount()
    {
        app(DeleteAccount::class)();

        return sendResponse();
    }

    public function blockUser(string $blocked_user_id,)
    {
        app(BlockUserAction::class)($blocked_user_id);

        return sendResponse();
    }

    public function unblockUser(string $blocked_user_id,)
    {
        app(UnblockUserAction::class)($blocked_user_id);

        return sendResponse();
    }
}
