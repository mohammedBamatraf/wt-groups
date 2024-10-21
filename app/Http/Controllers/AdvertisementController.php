<?php

namespace App\Http\Controllers;

use App\Actions\Advertisements\CreateAdvertisement;
use App\Actions\Advertisements\GetAdvertisement;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = app(GetAdvertisement::class)();

        return sendResponse(data: $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdvertisementRequest $request)
    {
        $data = app(CreateAdvertisement::class)($request);

        return sendResponse(data: $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
