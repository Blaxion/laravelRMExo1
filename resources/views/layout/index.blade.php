<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="/farhad">Farhad</a>
            <a href="/welcome/5">1 Chiffre</a>
            <a href="/welcome/10/5">2 Chiffres</a>
            <a href="/couleur/vert">Couleur</a>
        </nav>
    </header>
    @yield('main')
</body>
</html>