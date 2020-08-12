<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [ "title", "description", "task_list_id", "order", "temp_id"];
    public function taskList()
    {
        return $this->belongsTo(TaskList::class);
    }
}
