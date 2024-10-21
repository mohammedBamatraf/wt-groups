<?php

namespace App\Http\Controllers;

use App\Actions\Groups\IgnoreGroupsAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class IgnoreGroupsController extends Controller
{

    public function __invoke(string $group_id): JsonResponse
    {
        app(IgnoreGroupsAction::class)($group_id);
        return sendResponse();
    }
}
