<?php

namespace App\Http\Controllers;

use App\Models\CompletedTask;
use Illuminate\Http\Request;


class CompletedTaskController extends Controller
{
    public function list()
{
    // 処理を記述する
    // ...
    return view('task.completed_list', ['list' => $list]);
}
}
