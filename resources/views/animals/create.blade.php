<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>

<form method="POST" action="/animals">
    {{ csrf_field() }}

    <input name="name" type="text">
    <input name="group" type="text">
    <button type="submit">保存</button>
</form>

</body>
</html>