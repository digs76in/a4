<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;
use Session;
use Carbon\Carbon;

class TaskController extends Controller
{

    /**
    *function to present the welcome page when a3 application is accesses
    */
    public function index() {
        return view('welcome');
    }
    
    /**
    * GET
    * /tasks/new
    * Display the form to add a new task
    */
    public function createNewTask(Request $request) {
        
        $tasks = Task::paginate(10);
        return view('tasks.new')->with(['tasks' => $tasks]);
    }
    
    
     /**
    * POST
    * /tasks/new
    * Process the form for adding a new task
    */
    public function storeNewTask(Request $request) {

        $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'description' => 'required|min:10|max:100',
            'due' => 'required|date',            
        ]);

        # Add new task to database
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due= Carbon::parse($request->due);
        $task->save();
       
        
              
        Session::flash('message', 'The Task '.$task->name.' was added.');
        
       
        # Redirect the user to task index
       return redirect('/tasks/new');
    }

    
    /**
    * GET
    * /tasks/edit/{id}
    * Show form to edit a task
    */
    public function edit($id) {

        $task = Task::find($id);

        if(is_null($task)) {
            Session::flash('message', 'The task you requested was not found.');
            return redirect('/tasks/new');
        }

        return view('tasks.edit')->with([
            'id' => $id,
            'task' => $task,
        ]);

    }
    
     /**
    * POST
    * /tasks/edit
    * Process form to save edits to a task
    */
    public function saveEdits(Request $request) {

         $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'description' => 'required|min:10|max:100',
            'due' => 'required|date|after:today',            
        ]);

        $task = Task::find($request->id);

        # Edit task in the database
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due = Carbon::parse($request->due);
       
        $task->save();

        Session::flash('message', 'Your changes to '.$task->name.' were saved.');
        return redirect('/tasks/new');

    }
    
    
    /**
    * GET
    * Page to confirm deletion
    */
    public function confirmDeletion($id) {

        # Get the task they're attempting to delete
        $task = Task::find($id);

        if(!$task) {
            Session::flash('message', 'Task not found.');
            return redirect('/tasks/new');
        }

        return view('tasks.delete')->with('task', $task);
    }


    /**
    * 
    * Actually delete the task
    */
    public function delete(Request $request) {

        # Get the task to be deleted
        $task = Task::find($request->id);

        if(!$task) {
            Session::flash('message', 'Deletion failed; task not found.');
            return redirect('/tasks/new');
        }
        
        $task->employees()->detach();
        $task->delete();

        # Finish
        Session::flash('message', $task->name.' was deleted.');
        return redirect('/tasks/new');
    }

     /**
    * ANY
    * /tasks/assign/{id}
    * Display the form to assign a new task
    */
    public function createTaskAssignment($id) {
        
         $task = Task::with('employees')->find($id);        

        if(is_null($task)) {
            Session::flash('message', 'The task asssignment you requested was not found.');
            return redirect('/tasks/assign');
        }
        
        $employeesForDropdown = Employee::employeesForDropdown();
        
        # Create a simple array of just the employee names for employees associated with this task;
        # will be used in the view to decide which employees should be highlighted in select box
        $employeesForThisTask = [];
        foreach($task->employees as $employee) {
            $employeesForThisTask[] = $employee->id;
        }

        return view('tasks.editassign')->with([
            'id' => $id,
            'tasks'=>$task,
            'employeesForDropdown'=>$employeesForDropdown,
            'employeesForThisTask'=>$employeesForThisTask,
        ]);
    }

    
    /**
    * GET
    * /tasks/assign
    * Display the form to show task assignment form
    */
    public function showTaskAssignment() {
       
        $task = Task::with('employees')->paginate(10);
        
        return view('tasks.assign')
        ->with([
            'tasks' => $task,
        ]);

      
    }
    
      /**
    * POST
    * /assign/edit
    * Process form to save edits to a task
    */
    public function saveTaskAssignmentEdits(Request $request) {
        
        $this->validate($request, [
            'emps' => 'required|array'            
        ]);

        $task = Task::with('employees')->find($request->id);
        if($request->emps) {
            $employees = $request->emps;
        }
        # If there were no employees selected (i.e. no employees in the request)
        # default to an empty array of employees
        else {
            $employees = [];
        }
      

       $task->employees()->sync($employees);
       $task->save();

       Session::flash('message', 'Your changes to '.$task->name.' were saved.');
       return redirect('/tasks/assign');

    }
    
    /**
    * GET
    * Page to confirm deletion
    */
    public function confirmAssignmentDeletion($id) {

        # Get the task they're attempting to delete
       
         $task = Task::with('employees')->find($id);  

        if(!$task) {
            Session::flash('message', 'Task not found.');
            return redirect('/tasks/assign');
        }

        return view('tasks.deleteassign')->with('task', $task);
    }
     /**
    * 
    * Actually delete the task assignment
    */
    public function deleteAssignment(Request $request) {

        # Get the task to be deleted
      
         $task = Task::with('employees')->find($request->id);  

        if(!$task) {
            Session::flash('message', 'Assignment deletion failed; task not found.');
            return redirect('/tasks/assign');
        }
        
        $task->employees()->detach();
        $task->save();

        # Finish
        Session::flash('message', $task->name.' assignment was deleted.');
        return redirect('/tasks/assign');
    }

}

