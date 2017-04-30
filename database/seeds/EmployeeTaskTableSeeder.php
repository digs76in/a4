<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;


class EmployeeTaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees =[
            'Sales Associate' => ['Event B','Client A presentation'],
            'Event Manager' => ['Event B','CEO LA Airport Pickup'],
            'LA Office Manager' => ['CEO LA Airport Pickup','Office Supplies'],
            'LA Office Admin' => ['Office Supplies']
        ];

        # Now loop through the above array, creating a new pivot for each employee to task
        foreach($employees as $job_title => $tasks) {

            # First get the employee
            $employee = Employee::where('job_title','like',$job_title)->first();

            # Now loop through each task for this employee, adding the pivot
            foreach($tasks as $name) {
                $task = Task::where('name','LIKE',$name)->first();

                # Connect this tag to this book
                $employee->tasks()->save($task);
            }

        }
    }
}
