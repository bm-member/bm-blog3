<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if($this->image) {
            $this->image = asset('upload/profile/' . $this->image);
        } else {
            $this->image = asset('image/profile/user.png');
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'image' => $this->image,
            'status' => 'Success!',
            'date' => $this->created_at->toFormattedDateString('d-M-Y')
        ];
    }
}
