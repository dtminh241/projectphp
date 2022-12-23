<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/99fa63299e.js" crossorigin="anonymous"></script>
    <title>{{ $title }}</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset("css/header.css") }}">
</head>
<body>
    @include('layouts.header')
    <div class="form">
        @yield('content')
    </div>
    @include('layouts.footer')
    @yield('js')
</body>
</html>