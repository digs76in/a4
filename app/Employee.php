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
    
    public static function employeesForDropdown() {

        $employees = Employee::orderBy('id', 'ASC')->get();
        $employeesForDropdown = [];
        foreach($employees as $employee) {
            $employeesForDropdown[$employee->id] = $employee->first_name.', '.$employee->last_name .'=='.$employee->job_title;
        }

        return $employeesForDropdown;
    }
}
