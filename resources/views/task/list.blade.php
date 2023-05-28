<h1>タスクの登録</h1>
            @if (session('front.task_register_success') == true)
                タスクを登録しました！！<br>
            @endif
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            <form action="/task/register" method="post">
                @csrf
                タスク名:<input name="name" value="{{ old('name') }}"><br>
                期限:<input name="period" type="date" value="{{ old('period') }}"><br>
                タスク詳細:<textarea name="detail">{{ old('detail') }}</textarea><br>
                重要度:<label><input type="radio" name="priority" value="1" @if (old('priority') == 1) checked @endif>低い</label> /
                    <label><input type="radio" name="priority" value="2" @if (old('priority', 2) == 2) checked @endif>普通</label> /
                    <label><input type="radio" name="priority" value="3" @if (old('priority') == 3) checked @endif>高い</label><br>
                <button>タスクを登録する</button>
            </form>