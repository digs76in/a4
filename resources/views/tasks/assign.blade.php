{{-- /resources/views/tasks/assign.blade.php --}}
@extends('layouts.master')

@section('title')
    Assign Task
@endsection

@push('head')

@endpush


@section('content')
     <div class='row'>               
         <h1>Task Assignments</h1>
    </div>


    
   
    <div class="table-responsive">
        <table class="table table-hover" id="tasklist">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Task Description</th>
                    <th>Task Due By</th>       
                    <th>Assigned Employee Names</th>
                </tr>
            </thead>
            <tbody id="myTable">
               
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->due }}</td>
                        <td>                        
                            @foreach($task->employees as $employee) 
                               {{ $employee->first_name }} {{ $employee->last_name }}, 
                            @endforeach    
                        </td>  
                        <td><a href='/tasks/assign/{{ $task->id }}'>Edit Task Assignment</a></td>
                        @if(!($task->employees->isEmpty())) 
                            <td><a href='/tasks/assign/delete/{{ $task->id }}'>Delete</a></td> 
                        @endif

                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> {{ $tasks->links() }} </td>
                   
                </tr>
          
            </tbody>
      </table>
    </div>

@endsection
