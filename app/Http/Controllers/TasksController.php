<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks/index',
            compact('tasks')); // <-- What to pass to the view
    }

    public function show(Task $task) { // == Task::find(wildcard) where wildcard isset in routes->web.php
//        $task = Task::find($task);
        return view('tasks/show', compact('task'));
    }

}
