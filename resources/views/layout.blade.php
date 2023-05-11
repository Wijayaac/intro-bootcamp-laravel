<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Assets --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}">
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])
    <title>Online Library - @yield('title')</title>
</head>

<body>
    <div class="container">
        @include('components.header')

        @yield('content')

        @section('pagination')

        @show

        @include('components.footer')
    </div>
</body>

</html>
