<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [ "title", "description"];
    public function taskLists()
    {
        return $this->hasMany(TaskList::class);
    }
}
