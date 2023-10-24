<?php

namespace App\Http\Resources;

use App\Enums\LanguageCodeEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this -> id,
            'image' => $this->getFirstMediaUrl('image advertisement'),
            'link' => $this ->link,
            'state' => $this -> state
        ];
    }
}
