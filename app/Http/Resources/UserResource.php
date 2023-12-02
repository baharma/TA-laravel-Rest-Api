<?php

namespace App\Http\Resources;

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
            'id'=>$this->id ?? null,
            'name'=>$this->name ?? null,
            'email'=>$this->email ?? null,
            'semester'=>$this->semester ?? null,
            'role'=>$this->role ?? null,
            'profile_image' => $this->image ? url('public/Image/' . $this->id . '/' . $this->image) : null,
            'nim'=>$this->nim ?? null
        ];
    }
}
