<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99fa63299e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset("css/account.css") }}">
    @yield('css')
</head>
<body>
    <div class="main">
        <div class="main-heading">
            <div class="image">
                <a href="{{ route('show','keansburg-park') }}"><img src="https://keansburgamusementpark.com/wp-content/uploads/2015/02/kap_logo.png" alt=""></a>
            </div>
            <div class="user"> 
                <p>Hello, {{ $account_name }}</p>
                <a href="{{ route('logout-account') }}"><p>Logout</p></a>
            </div>
        </div>
        <div class="main-body">
            <div class="main-body-left">
                <div class="nav-admin">
                    <ul> 
                        <a href="{{ route('account-show') }}"><li class="accountInfo"><i class="fa-solid fa-user"></i>Account Info <i class="fa-solid fa-caret-down"></i></li></a>
                        <a href="{{ route('account-myorder') }}"><li class="order"><i class="fa-solid fa-cart-shopping"></i>My Order <i class="fa-solid fa-caret-down"></i></li></a>
                        <a href="{{ route('account-changepass') }}"><li class="changepass"><i class="fa-solid fa-lock"></i>Change Password <i class="fa-solid fa-caret-down"></i></li></a>
                    </ul>
                </div>
            </div>
            <div class="main-body-right">
                @yield('content')
            </div>
        </div>
    </div>
    @yield('js')
</body>
</html>