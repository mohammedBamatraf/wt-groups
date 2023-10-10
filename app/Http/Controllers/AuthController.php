<?php

namespace App\Http\Controllers;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\RegisterAction;
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

        return sendResponse(data:$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(RegisterRequest $request)
    {

        $data = UserResource::make(app(RegisterAction::class)($request));
        return sendResponse(data:$data,);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return sendResponse();
    }
}
