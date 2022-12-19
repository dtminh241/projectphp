<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{  }}</title>
    @yield('css')
</head>
<body>
    @include('header')
    <br>
    <div class="container">
        @yield('content')
    </div>
    <br>
    @include('footer')
    @yield('js')
</body>
</html>