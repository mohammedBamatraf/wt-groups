<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupReportDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'views' => $this->views,
            'category' => $this->category->name,
            'language' => $this->language->name,
            'description' => $this->description,
            'link' => $this->link,
            'image' => $this->getFirstMediaUrl('image group') ?: null,
            'reports' => $this->report()->select(['description'])->get(),
        ];
    }
}
