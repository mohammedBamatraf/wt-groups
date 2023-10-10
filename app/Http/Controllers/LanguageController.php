<?php

namespace App\Http\Controllers;

use App\Actions\Languages\GetLanguages;
use App\Http\Resources\LanguageResource;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(app(GetLanguages::class)());
        $data =LanguageResource::collection(app(GetLanguages::class)());
        return sendResponse(data:$data);
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
