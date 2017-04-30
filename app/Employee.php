<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function tasks()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Task')->withTimestamps();
    }
}
