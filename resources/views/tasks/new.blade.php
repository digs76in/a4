{{-- /resources/views/tasks/new.blade.php --}}
@extends('layouts.master')

@section('title')
    New Task
@endsection

@push('head')

@endpush


@section('content')
     <div class='row'>               
         <h1>Add a new task</h1>
    </div>


    <form method='POST' action='/tasks/new' class="form-horizontal">
        {{ csrf_field() }}

     
        <div class="form-group">    
            <label for='name' class='control-label col-sm-2'>Provide Task Name <span class="asterisk">*</span> (20 chars max)</label> 
             <div class='col-sm-10'>
                 <input type='text' name='name' id='name' value='{{ old('name', '') }}' maxlength='20' required> 
            </div>
        </div>
        <div class="form-group">  
            <label for='description' class='control-label col-sm-2'>Task Description <span class="asterisk">*</span> (100 chars max)</label>
             <div class='col-sm-10'>
                 
                <textarea name='description' id='description' cols ='25' maxlength='50' required>{{ old('description', '') }}</textarea>
            </div>
        </div>
        <div class="form-group">  
            <label for='due' class='control-label col-sm-2'>Task Due By <span class="asterisk">*</span> (mm/dd/yy)</label>
             <div class='col-sm-10'>
                <input type='text' name='due' id='due' value='{{ old('due', '') }}' required>
            </div>
        </div>
      
       
        {{-- Extracted error code to its own view file --}}
        @include('errors')
        <div class="form-group">  
             <div class="col-sm-offset-2 col-sm-10">
                <input class='btn btn-primary' type='submit' value='Add new task'>
            </div>
        </div>
        
    </form>
   
    <div class="table-responsive">
        <table class="table table-hover" id="tasklist">
        <thead>
          <tr>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Task Due By</th>        
          </tr>
        </thead>
        <tbody id="myTable">
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due }}</td>
                    <td><a href='/tasks/edit/{{ $task->id }}'>Edit</a></td>
                    <td><a href='/tasks/delete/{{ $task->id }}'>Delete</a></td>
                    <td><a href='/tasks/assign/{{ $task->id }}'>Assign this task</a></td>
                    
                </tr>
            @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> {{ $tasks->links() }} </td>
                    <td></td>
                </tr>
          
        </tbody>
      </table>
        
    </div>
  

@endsection
