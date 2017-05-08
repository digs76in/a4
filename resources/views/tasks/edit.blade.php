{{-- /resources/views/tasks/edit.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit Task
@endsection

@push('head')

@endpush


@section('content')
     <div class='row'>               
         <h1>Edit a task</h1>
    </div>


    <form method='POST' action='/tasks/edit' class="form-horizontal">
        {{ csrf_field() }}
        
        <input type='hidden' name='id' value='{{$task->id}}'>
     
        <div class="form-group">    
            <label for='name' class='control-label col-sm-2'>Edit Task Name <span class="asterisk">*</span> (20 chars max)</label> 
             <div class='col-sm-10'>
                 <input type='text' name='name' id='name' value='{{ old('name', $task->name) }}' maxlength='20' required> 
            </div>
        </div>
        <div class="form-group">  
            <label for='description' class='control-label col-sm-2'>Edit Task Description <span class="asterisk">*</span> (100 chars max)</label>
             <div class='col-sm-10'>
                 
                <textarea name='description' id='description' cols ='25' maxlength='50' required>{{ old('description', $task->description) }}</textarea>
            </div>
        </div>
        <div class="form-group">  
            <label for='due' class='control-label col-sm-2'>Edit Task Due By <span class="asterisk">*</span>(mm/dd/yy)</label>
             <div class='col-sm-10'>
                <input type='text' name='due' id='due' value='{{ old('due', $task->due) }}' required>
            </div>
        </div>
      
       
        {{-- Extracted error code to its own view file --}}
        @include('errors')
        <div class="form-group">  
             <div class="col-sm-offset-2 col-sm-10">
                <input class='btn btn-primary' type='submit' value='Edit this task'>
            </div>
        </div>
        
    </form>
   
  

@endsection
