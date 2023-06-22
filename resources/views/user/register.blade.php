<!DOCTYPE html>
<html>
<head>
    <title>会員登録</title>
</head>
<body>
    <h1>会員登録</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('user.register.post') }}">
        @csrf

        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required maxlength="128"><br><br>

        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" required maxlength="254"><br><br>

        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password" required maxlength="72"><br><br>

        <input type="submit" value="登録">
    </form>
</body
