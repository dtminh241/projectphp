<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .menu-box li{
            list-style-type: none;
            
        }   
        .menu-box li a{
            text-decoration: none;
        }
        .select-box{
            margin-left:20px;
            padding-top:20px;
            padding-bottom:20px;
            padding-right: 90px;
            padding-left:30px;
            color: black;
            border: solid thin black;
        }
        .menu{
            display:flex;
        }
        .menu-box{
            margin-left:15%;
            width:25%;
        }
        .menu-content{
            margin-right:15%;
            margin-left:5%;
            width:40%;

        }
    </style>
</head>
<body class="menu">
    <div class="menu-box">
        <ul>
        <p><a href="#/!"></a></p>
            <li>
                <a href="#!Info"><div class="select-box">Account Info</div></a>
            </li>
            <li>
                <a href="#!MyOrder"><div class="select-box">My Order</div></a>
            </li>
            <li>
                <a href="#!ChangePw"><div class="select-box">Change Password</div></a>
            </li>
        </ul>
    </div>
    <div ng-view class="menu-content">
        <h1>Account Info</h1>
        <p>Name: </p>
        <p>Email: </p>
        <p>Phone number: </p>

    </div>


    <script>
        var app = angular.module("myApp", ["ngRoute"]);
        app.config(function($routeProvider) {
            $routeProvider
            .when("/", {
                templateUrl : "info.htm"
            })
            .when("/Info", {
                templateUrl : "info.htm"
            })
            .when("/MyOrder", {
                templateUrl : "myorder.htm"
            })
            .when("/ChangePw", {
                templateUrl : "changepw.htm"
            });
        });
    </script>
</body>
</html>