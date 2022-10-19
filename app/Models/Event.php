<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }

    public function getFutureEventsAttribute()
    {
        return null;
    }
}
