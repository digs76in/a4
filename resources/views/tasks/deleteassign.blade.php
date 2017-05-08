@extends('layouts.master')

@section('title')
    Confirm assignment deletion: {{ $task->name }}
@endsection

@section('content')

    <h1>Confirm assignment deletion</h1>
    <form method='POST' action='/assign/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $task->id }}'?>

        <h2>Are you sure you want to delete assignment for this task: <em>{{ $task->name }}</em>?</h2>

        <input type='submit' value='Yes, delete this task assignment.' class='btn btn-danger'>

    </form>

@endsection
