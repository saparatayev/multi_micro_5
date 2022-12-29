<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackSlideResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'name_ru' => $this->name_ru,
            'city' => $this->city,
            'city_ru' => $this->city_ru,
            'youtube_link' => $this->youtube_link,
            'feedback' => $this->feedback,
            'image_url' => $this->imageUrl(),
            'image_customer_url' => $this->imageUrl('image_customer'),
        ];
    }
}
