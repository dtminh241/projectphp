@if ((\Session::has('token') == true) && (\Session::get('permission') == 1))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/99fa63299e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="{{ asset("css/admin/administrator.css") }}">
    <title>{{ $title }}</title>
    @yield('css')
</head>
<body>
    <div class="main">
        <div class="main-heading">
            <ul> 
                <li><i class="fa-brands fa-windows"></i>Administrator</li>
                <li><a href="{{ route('show','keansburg-park') }}"><i class="fa-solid fa-arrow-rotate-left"></i>Back to web</a></li>
            </ul>
        </div>
        <div class="main-body">
            <div class="main-body-left">
                <div class="nav-admin">
                    <ul>  
                        <a href="{{ route('administrator') }}"><li class="home"><i class="fa-solid fa-house"></i>Home <i class="fa-solid fa-caret-down"></i></li></a>
                        <a href="{{ route('administrator-permission') }}"><li class="lock"><i class="fa-solid fa-lock"></i>Grant permission user <i class="fa-solid fa-caret-down"></i></li></a>
                        <a href="{{ route('administrator-order') }}"><li class="cart"><i class="fa-solid fa-cart-shopping"></i>All order <i class="fa-solid fa-caret-down"></i></li></a>
                        <a href="{{ route('administrator-product') }}"><li class="ticket"><i class="fa-solid fa-ticket"></i>Product <i class="fa-solid fa-caret-down"></i></li></a>
                        <a href="{{ route('administrator-news') }}"><li class="news"><i class="fa-solid fa-newspaper"></i>News <i class="fa-solid fa-caret-down"></i></li></a>
                    </ul>
                </div>
            </div>
            <div class="main-body-right">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset("js/admin/administrator.js") }}"></script>
    @yield('js')
</body>
</html>
@endif