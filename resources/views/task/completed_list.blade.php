@extends('layout')

@section('title')
    (詳細画面)
@endsection

@section('contents')
    <h1>タスクの登録</h1>
    <!-- タスク登録フォーム -->
    <!-- 省略 -->

    <h1>タスクの一覧</h1>
    <a href="{{ route('completed_tasks.list') }}">完了タスク一覧</a><br>
    <a href="./top.html">CSVダウンロード</a><br>
    <table border="1">
        <tr>
            <th>タスク名</th>
            <th>期限</th>
            <th>重要度</th>
            <th>詳細閲覧</th>
            <th>編集</th>
            <th>完了</th>
        </tr>
        @foreach ($list as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->period }}</td>
                <td>{{ $task->getPriorityString() }}</td>
                <td><a href="./detail.html">詳細閲覧</a></td>
                <td><a href="./edit.html">編集</a></td>
                <td><form action="./top.html"><button>完了</button></form></td>
            </tr>
        @endforeach
    </table>
    <!-- ページネーション -->
    現在 {{ $list->currentPage() }} ページ目<br>
    @if ($list->onFirstPage() === false)
        <a href="{{ $list->previousPageUrl() }}">最初のページ</a>
    @else
        最初のページ
    @endif
    /
    @if ($list->previousPageUrl() !== null)
        <a href="{{ $list->previousPageUrl() }}">前に戻る</a>
    @else
        前に戻る
    @endif
    /
    @if ($list->nextPageUrl() !== null)
        <a href="{{ $list->nextPageUrl() }}">次に進む</a>
    @else
        次に進む
    @endif
    <br>
    <hr>
    <menu label="リンク">
        <a href="./index.html">ログアウト</a><br>
    </menu>
@endsection
