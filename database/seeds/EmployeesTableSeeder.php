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
        
        
         Employee::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Sean',
            'last_name' => 'Jagger',
            'job_title' => 'Accountant',
            
        ]);

        Employee::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Oliver',
            'last_name' => 'Swift',
            'job_title' => 'Finance Manager',
        ]);

        Employee::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Mark',
            'last_name' => 'Fox',
            'job_title' => 'IT Admin',
        ]);

        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'David',
            'last_name' => 'Williams',
            'job_title' => 'Legal Head',
        ]);
        
        Employee::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Maria',
            'last_name' => 'Cuomo',
            'job_title' => 'Payroll Admin',
        ]);

        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Debra',
            'last_name' => 'Perry',
            'job_title' => 'HR Manager',
        ]);
        
        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Mike',
            'last_name' => 'Adams',
            'job_title' => 'Accounts Receivable Admin',
        ]);
        
        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Gabby',
            'last_name' => 'Watson',
            'job_title' => 'Accounts Payable Admin',
        ]);
        
        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Dave',
            'last_name' => 'McKenna',
            'job_title' => 'Sales Manager',
        ]);
        
        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Melissa',
            'last_name' => 'Cox',
            'job_title' => 'Account Manager',
        ]);
        
        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Adam',
            'last_name' => 'Scott',
            'job_title' => 'Project Manager',
        ]);
        
        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Jay',
            'last_name' => 'Bose',
            'job_title' => 'Software Engineer',
        ]);
        
        Employee::insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Sharon',
            'last_name' => 'Hudson',
            'job_title' => 'Designer',
        ]);
        
        
        
    }
}
