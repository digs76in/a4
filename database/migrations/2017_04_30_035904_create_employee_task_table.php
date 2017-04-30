<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_task', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            # `task_id` and `emp_id` will be foreign keys, so they have to be unsigned
            #  Note how the field names here correspond to the tables they will connect...
            # `task_id` will reference the `tasks table` and `emp_id` will reference the `employees` table.
            $table->integer('employee_id')->unsigned();
            $table->integer('task_id')->unsigned();
            
            # Make foreign keys
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('task_id')->references('id')->on('tasks');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_task');
    }
}
