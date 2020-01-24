<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $orderedTasks = $this->tasks->sortBy('order')->pluck('id');
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "order" => $this->order,
            "tasks" => TaskResource::collection($this->tasks),
            "tasks_order" => $orderedTasks,
        ];
    }
}
