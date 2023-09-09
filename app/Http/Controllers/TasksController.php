<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    /* This function is used to Fetch Records from DB */
    public function index() {
        $tasks = Task::select('id', 'name', 'status')->get();
       
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }
}
