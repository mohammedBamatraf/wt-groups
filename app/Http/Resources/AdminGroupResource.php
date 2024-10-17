<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminGroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name' => $this->name,
            'views' => $this -> views,
            'category' => CategoryResource::make($this -> category ),
            'language' => LanguageResource::make($this -> language),
            'description' => $this-> description,
            'link' => $this->link,
            'image' => $this->getFirstMediaUrl('image group')?:null,
            'ad'=> $this->getAdvertisement($request)?AdvertisementResource::make($this->getAdvertisement($request)):null,
            'reports' => $this->report,
            'vip' => $this->vip,
            'is_active' => $this -> is_active,
        ];
    }
}
