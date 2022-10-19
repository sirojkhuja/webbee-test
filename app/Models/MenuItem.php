<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function children()
    {
        return $this->hasMany(static::class, 'parent_id');
    }
}
