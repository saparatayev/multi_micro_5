<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoubleSlideResource extends JsonResource
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
            'title' => $this->title,
            'title_ru' => $this->title_ru,
            'price' => str_replace('.00', '', number_format($this->price, 2, '.', '')),
            'image_url' => $this->imageUrl(),
            'image_sm_url' => $this->imageUrl('image_sm'),
        ];
    }
}
