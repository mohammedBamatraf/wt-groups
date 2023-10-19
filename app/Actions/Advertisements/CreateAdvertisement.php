<?php
namespace App\Actions\Advertisements;

use App\Exceptions\LogicException;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Language;
use App\Models\User;

class CreateAdvertisement
{
    public function __invoke(AdvertisementRequest $request)
    {
        $data = $request->validated();
        $ad = Advertisement::create($data+['state'=>true]);
        $ad->addMedia($data['image'])->toMediaCollection('image advertisement');
        return $ad ;
    }
}
