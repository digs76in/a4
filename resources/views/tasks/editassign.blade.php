{{-- /resources/views/tasks/assign.blade.php --}}
@extends('layouts.master')

@section('title')
    Assign Task
@endsection

@push('head')

@endpush


@section('content')
     <div class='row'>               
         <h1>Edit Task Assignments</h1>
    </div>
  
         
    <form method='POST' action='/assign/edit' class="form-horizontal">

        {{ csrf_field() }}
        <input type='hidden' name='id' value="{{ $tasks->id}}"?>
       

        <div>
            <h5> Assign Task: <em>{{ $tasks->name }} -> {{ $tasks->description }}</em></h5>
        </div>
    
        <div class="form-group">
            <label for='emps' class='control-label col-sm-2'>Assign to Muliple Employees <span class="asterisk">*</span></label>
            
            <div class='col-sm-10'>
                <select name="emps[]" id="emps" multiple class="selectpicker" data-title="Select All That Apply" data-style="form-control" size="3" multiple>

                        @foreach($employeesForDropdown as $employee_id => $employeeName)                   

                             <option value='{{ $employee_id }}' {{ (in_array($employee_id, $employeesForThisTask)) ? 'SELECTED' : '' }}>
                                 {{ $employee_id }} == {{$employeeName}}
                             </option>
                         @endforeach 

                </select> 
            </div>
        </div>
       

    
     

        {{-- Extracted error code to its own view file --}}
        @include('errors')
        <div class="form-group">  
             <div class="col-sm-offset-2 col-sm-10">
                <input class='btn btn-primary' type='submit' value='Edit task assignment'>
            </div>
        </div>        
    </form>
@endsection
