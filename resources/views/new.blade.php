<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>   
        @if (is_numeric($chiffre1) == true AND  is_numeric($chiffre2) == true)
        <p>{{$chiffre1 + $chiffre2}}</p>
        <p>{{$chiffre1 - $chiffre2}}</p>
        @else
        t'as cru quoi
        @endif
    </div>
    
</body>
</html>