<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function employees()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Employee')->withTimestamps();
    }
}
