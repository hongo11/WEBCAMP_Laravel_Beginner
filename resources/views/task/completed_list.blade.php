<!DOCTYPE html>
<html>
<head>
    <title>完了タスク一覧</title>
</head>
<body>
    <h1>完了タスク一覧</h1>

    <table border="1">
        <a href="{{ route('task.list') }}">タスク一覧に戻る</a>
        <tr>
            <th>タスク名</th>
            <th>期限</th>
            <th>重要度</th>
            
            <th>タスク終了日</th>
        </tr>
        @foreach ($completedTasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->period }}</td>
            <td>{{ $task->priority }}</td>
            <td>
                @if ($task->completed_at)
                    {{ $task->completed_at->format('Y-m-d H:i:s') }}
                @else

                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <p>現在{{ $completedTasks->currentPage() }}ページ目</p>
    <p>
        {!! $completedTasks->onFirstPage() ? '最初のページ' : '<a href="'.$completedTasks->previousPageUrl().'">前のページ</a>' !!}
        /
        {!! $completedTasks->hasMorePages() ? '<a href="'.$completedTasks->nextPageUrl().'">次のページ</a>' : '最後のページ' !!}
    </p>

    <a href="{{ route('logout') }}">ログアウト</a>
</body>
</html>
