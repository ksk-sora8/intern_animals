<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>

<form method="POST" action="/animals/{{ $animal->name }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <input name="name" type="text" value="{{ $animal->name }}">
    <input name="group" type="text" value="{{ $animal->group }}">
    <button type="submit">保存</button>
</form>

</body>
</html>