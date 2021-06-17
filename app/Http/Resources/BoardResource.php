<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $orderedLists = $this->taskLists->sortBy('order')->pluck('id');
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "order" => $this->order,
            "lists" => TaskListResource::collection($this->taskLists),
            "lists_order" => $orderedLists,
        ];
    }
}
