<?php

use Illuminate\Database\Seeder;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Client A presentation',
            'description' => 'Create a presentation for Client A to introduce our company',
            'due' => Carbon\Carbon::now()->addWeeks(1)->toDateTimeString(),
            
        ]);

        Task::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Event B',
            'description' => 'Book venue, sent invites, manage invitees, manage Event B end to end',
            'due' => Carbon\Carbon::now()->addWeeks(3)->toDateTimeString(),
        ]);

        Task::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'CEO LA Airport Pickup',
            'description' => 'Pickup client CEO from LA airport and escort to office',
            'due' => Carbon\Carbon::now()->addDays(5)->toDateTimeString(),
        ]);

        Task::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Office Supplies',
            'description' => 'Order monthly office supplies for LA office',
            'due' => Carbon\Carbon::now()->addDays(3)->toDateTimeString(),
        ]);

       
    }
}
