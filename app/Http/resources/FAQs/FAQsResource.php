<?php

namespace App\Http\Resources\FAQs;

use Illuminate\Http\Resources\Json\JsonResource;

class FAQsResource extends JsonResource
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
            'text' =>$this->text,
        ];
    }
}
