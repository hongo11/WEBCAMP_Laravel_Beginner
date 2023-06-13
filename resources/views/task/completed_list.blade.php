@extends('layout')

@section('title', '完了タスク一覧')

@section('contents')
    <h1>完了タスク一覧</h1>
    <table border="1">
        <tr>
            <th>タスク名</th>
            <th>期限</th>
            <th>重要度</th>
        </tr>
        @foreach ($completedTasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->period }}</td>
                <td>{{ $task->priority }}</td>
            </tr>
        @endforeach
    </table>
@endsection
