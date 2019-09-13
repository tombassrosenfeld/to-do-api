<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function taskLists()
    {
        return $this->hasMany(TaskList::class);
    }
}
