<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompletedTask;

class CompletedTaskController extends Controller
{
    public function list()
    {
        $completedTasks = \App\Models\CompletedTask::all(); // クラス名の前に\を追加
        return view('task.completed_list', compact('completedTasks'));
    }
}
