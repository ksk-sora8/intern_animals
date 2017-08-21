<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>

@foreach($animals as $animal)
    名前：{{ $animal->name }}
    グループ：{{ $animal->group }}
    <br>
@endforeach

</body>
</html>