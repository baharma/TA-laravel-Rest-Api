<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EventResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'error' => false,
            'message' => 'Events fetched successfully',
            'listEvent' =>$this->collection->map(function ($event){
              return[
                'id'=>$event->id,
                'title_name' => $event->title_name ?? null,
                'slug' => $event->slug ?? null,
                'description' => $event->description ?? null,
                'image' => $event->image ?? null,
                'address_event' => $event->address_event ?? null,
                'ukm_id' => $event->ukm_id ?? null,
                'user_post' => $event->user_post ?? null,
                'start_register' => $event->start_register ?? null,
                'end_register' => $event->end_register ?? null,
                'tlp' => $event->tlp ?? null,
              ];
            })
        ];

    }
}
