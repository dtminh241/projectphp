<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
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
                <a href="#!info"><div class="select-box">Account Info</div></a>
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

    </div>


    <script>
        var app = angular.module("myApp", ["ngRoute"]);
        app.config(function($routeProvider) {
            $routeProvider
            .when("/", {
                templateUrl : "account-info.php"
            })
            .when("/info", {
                templateUrl : "account-info.php"
            })
            .when("/MyOrder", {
                templateUrl : "account-order.html"
            })
            .when("/ChangePw", {
                templateUrl : "account-changepw.php"
            });
        });
    </script>
</body>
</html>