<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Get route to show the home page for A4 application
Route::get('/', 'TaskController@index');

# Get route to show the form to add a new task
Route::get('/tasks/new', 'TaskController@createNewTask');

# Post route to complete adding a new task
Route::post('/tasks/new', 'TaskController@storeNewTask');

# Get route to show a form to edit an existing task
Route::get('/tasks/edit/{id}', 'TaskController@edit');

# Post route to process the form to save changes/edits to the task
Route::post('/tasks/edit', 'TaskController@saveEdits');

# Get route to confirm deletion of task
Route::get('/tasks/delete/{id}', 'TaskController@confirmDeletion');

# Post route to actually delete the task
Route::post('/tasks/delete', 'TaskController@delete');

# Get route to  show a form to edit an existing task assignment
Route::any('/tasks/assign/', 'TaskController@showTaskAssignment');

# Any route to actually assign the task
Route::any('/tasks/assign/{id}', 'TaskController@createTaskAssignment');

# Any route to complete editing task assignment
Route::any('/assign/edit/', 'TaskController@saveTaskAssignmentEdits');

# Get route to confirm deletion of task assignment
Route::get('/tasks/assign/delete/{id}', 'TaskController@confirmAssignmentDeletion');

# Post route to complete deletion of task assignment
Route::post('/assign/delete', 'TaskController@deleteAssignment');