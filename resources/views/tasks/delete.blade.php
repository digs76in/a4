@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $task->name }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/tasks/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $task->id }}'>

        <h2>Are you sure you want to delete the task: <em>{{ $task->name }}</em>?</h2>

        <input type='submit' value='Yes, delete this task.' class='btn btn-danger'>

    </form>

@endsection
