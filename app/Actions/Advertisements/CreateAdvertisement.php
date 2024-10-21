<?php

namespace App\Actions\Advertisements;

use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;

class CreateAdvertisement
{
    public function __invoke(AdvertisementRequest $request)
    {
        $data = $request->validated();
        $ad = Advertisement::create($data + ['state' => true]);
        $ad->addMedia($data['image'])->toMediaCollection('image advertisement');

        return $ad;
    }
}
