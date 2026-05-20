<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
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
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'price' => $this->show_price
                ? $this->price
                : null,
            'type' => $this->type,
            'image' => $this->image
                ? asset('storage/' . $this->image)
                : null,
            'whatsapp' => $this->whatsapp,
            'phone' => $this->phone,
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
            ],
            'category' => $this->category?->name_ar,
            'city' => $this->city?->name_ar,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
