<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompletedTaskController extends Controller
{
    public function list()
    {
        $completedTasks = DB::table('completed_tasks')->get();
        return view('task.completed_list', ['completedTasks' => $completedTasks]);
    }
}
