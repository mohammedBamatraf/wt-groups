<?php

namespace App\Actions\Advertisements;

use App\Http\Resources\AdvertisementResource;
use App\Models\Advertisement;

class GetAdvertisement
{
    public function __invoke()
    {

        $advertisements = Advertisement::get();

        return AdvertisementResource::collection($advertisements);

    }
}
