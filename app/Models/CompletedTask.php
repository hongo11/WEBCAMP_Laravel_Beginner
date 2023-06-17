<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompletedTask;

class CompletedTaskController extends Controller
{
    public function list()
    {
        $completedTasks = CompletedTask::all();
        return view('task.completed_list', compact('completedTasks'));
    }
}
