<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'John',
            'last_name' => 'Smith',
            'job_title' => 'Sales Associate',
            
        ]);

        Employee::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Jane',
            'last_name' => 'Queen',
            'job_title' => 'Event Manager',
        ]);

        Employee::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Mike',
            'last_name' => 'Bing',
            'job_title' => 'LA Office Manager',
        ]);

        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Andrea',
            'last_name' => 'Brown',
            'job_title' => 'LA Office Admin',
        ]);
    }
}
