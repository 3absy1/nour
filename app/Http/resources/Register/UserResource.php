<?php

namespace App\Http\Resources\Register;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' =>$this->id,
            'fullName' =>$this->fullName,
            'email' =>$this->email,
            'phone' =>$this->phone,
            'password' =>$this->password,


        ];

    }
}
