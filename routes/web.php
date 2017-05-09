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
use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', function () {
    //$tasks = DB::table('tasks')->get();

    // Refering to app/Task (which is a model)
    //$tasks = App\Task::all();
    $tasks = Task::all(); // Dont need App\Task since we 'use' it.
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    //$task = DB::table('tasks')->find($id);
    //dd($task);
    $task = App\Task::find($id);
    return view('tasks/show', compact('task'));
});

