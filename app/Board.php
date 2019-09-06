<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function jobLists()
    {
        return $this->hasMany(JobList::class);
    }
}
