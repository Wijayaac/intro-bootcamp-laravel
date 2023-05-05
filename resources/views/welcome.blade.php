<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- Assets --}}
        @vite(['ressources/js/app.js','resources/css/home.scss'])
    </head>
    <body>
        <h1>Hello test</h1>
    </body>
</html>
