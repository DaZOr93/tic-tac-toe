<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Сейчас ход {{$playerNext}}</h3>
@foreach ($steps as $step)
    <a href="/{{$playerNext}}/{{$loop->index+1}}">{{ $step }}</a>

    @if(($loop->index+1 == 3) || ($loop->index+1 == 6))
        <br>
    @endif


@endforeach
<br>
<br>
<a href="/">Новая игра</a>
</body>
</html>
