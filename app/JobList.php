<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobList extends Model
{
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
