<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
    <nav class="navbar">
        <div class="container-fluid">
            <div>
                <a><b>Sistema Citas</b></a>
            </div>
            <ul class="nav">
                <li><a class="btn" href="/">Inicio</a></li>
                <li><a class="btn" href="/Doctor">Doctor</a></li>
                <li><a class="btn" href="/Appointment">Citas</a></li>
                <li><a class="btn" href="/Patient">Pacientes</a></li>
            </ul>
        </div>
    </nav>
</head>
<body>
<div class="app">
    @yield('content')
    <img class="imagenfondo" src="https://cdn.dribbble.com/users/5010909/screenshots/14123366/media/d6be1d36b6f7acc832ad020c5cfb14c3.jpg" alt="">
</div>
</body>
</html>
