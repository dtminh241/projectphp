<head>
    <style>
        .main{
            display: flex;
            width: 80%;
            margin: 0 auto;
        }
        .main-left{
            margin-right: 60px;
            margin-top: 20px;
        }
        .main-left h3{
            margin-left: 20px;
            border-bottom: solid 1px gray;
            color: purple;
        }
        .main-left a:hover{
            cursor: pointer;
            color: orange;
        }
        .main-right h1{
            color: purple;
        }
        .main-right p{
            margin-top: 25px;
            line-height: 25px;
        }
        .main-right p a{
            color: blue;
            font-size: 12px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        ul li {
            margin-bottom: 10px;
            color: orange;
        }
        .main-left{
            width: 240px;
        }
        .main-right{
            width: 882px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="main-left">
            <h3>Recent News</h3>
            <ul>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'library');
                $sql = "SELECT title FROM famous WHERE category_id = 13";
                $result = mysqli_query($conn, $sql);
                $data = [];
                while (($row = mysqli_fetch_array($result, 1)) != null) {
                    $data[] = $row;
                }
                mysqli_close($conn);
                for ($i = 0; $i < count($data); $i++) {
                    echo '
                            <li><a href="http://">' . $data[$i]['title'] . '</a></li>
                        ';
                }
                ?>
            </ul>
        </div>
        <div class="main-right">
            <h1>People are saying……</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/go-karts-5.jpg" alt="">
            <p>“A treasure of an amusement park in New Jersey. Waterpark and rides at a great price, never crowded and it has an old soul feeling about it. Every time we go to Keansburg we always have an awesome time and many fun memories. I wouldn’t go anywhere else.” Evelyn Lopes Delgado</p>
            <p>“A great place to take the family. Friendly atmosphere. Will definitely be back to visit.” – Erik Winits </p>
        </div>
    </div>
</body>