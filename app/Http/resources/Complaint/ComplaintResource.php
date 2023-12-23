<?php

namespace App\Http\Resources\Complaint;

use Illuminate\Http\Resources\Json\JsonResource;

class ComplaintResource extends JsonResource
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
            'phone' =>$this->phone,
            'email' =>$this->email,
            'message'=>$this->message,
//            'text' =>$this->text,

        ];
    }
}
