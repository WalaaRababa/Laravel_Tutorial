<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello world ,{{$passedName}}</h1>
@if($age>=25)
<div style="background:green"><h1>My age is ,{{$age}}</h1></div>
@elseif($age>10)
<div style="background:orange"><h1>My age is ,{{$age}}</h1></div>
@else
<div style="background:blue"><h1>My age is ,{{$age}}</h1></div>
@endif
@for ($i = 0; $i < 10; $i++)
<h1>    The current value is {{ $i }}
</h1>
@endfor
@foreach($Names as $name )
<button>{{$name}}</button>
@endforeach
</body>
</html>