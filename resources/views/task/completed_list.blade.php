 //completed_list.blade.php ファイル内に、完了タスク一覧を表示するためのHTMLコードを追加
<!DOCTYPE html>
<html>
<head>
    <title>Completed Tasks</title>
</head>
<body>
    <h1>Completed Tasks</h1>
    <ul>
        @foreach($completedTasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
</body>
</html>



@extends('layout')

@section('title')
完了タスク一覧
@endsection

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
        <td>{{ $task->getPriorityString() }}</td>

    </tr>
    @endforeach
</table>

<a href="{{ route('task.list') }}">戻る</a>
@endsection
