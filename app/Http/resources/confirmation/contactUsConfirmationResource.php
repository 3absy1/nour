<?php

namespace App\Http\Resources\confirmation;

use Illuminate\Http\Resources\Json\JsonResource;

class contactUsConfirmationResource extends JsonResource
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
