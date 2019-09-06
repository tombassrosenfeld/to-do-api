<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function jobList()
    {
        return $this->belongsTo(JobList::class);
    }
}
