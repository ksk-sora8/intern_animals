<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>

名前：{{ $animal->name }}
グループ：{{ $animal->group }}

<form method="POST" action="/animals/{{ $animal->name }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <button type="submit">削除</button>
</form>

</body>
</html>