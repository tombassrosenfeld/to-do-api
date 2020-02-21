<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoardIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $orderedTaskLists = $this->taskLists->sortBy('order')->pluck('id');
        return [
            "id" => $this->id,
            "title" => $this->title,
            "order" => $this->order,
            "lists_order" => $orderedTaskLists,
        ];
    }
}
