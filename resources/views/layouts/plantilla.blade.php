<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="row">
    <div class="col-4">
        <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="/">Ir al Inicio</a>
        <a class="list-group-item list-group-item-action" href="vista1">vista 1</a>
        <a class="list-group-item list-group-item-action" href="vista2">Vista 2</a>
        <a class="list-group-item list-group-item-action" href="vista3">Vista 3</a>
        </div>
    </div>
    </div>
    @yield('contenido')
    
    
</body>
</html>

