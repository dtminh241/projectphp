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
        .small{
            font-size: 12px;
            line-height: 5px;
            color: grey;
        }
        .small p{
            margin-top: 15px;
            line-height: 5px;
        }
        .small a {
            color: blue;
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
                $sql = "SELECT title FROM famous";
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
            <h1>Jerry’s Jobs: Working at Keansburg Amusement Park</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/jerrys-jobs.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on <a href="https://www.app.com/story/news/local/monmouth-county-bayshore/keansburg/2015/04/20/keansburg-amusement-park-jerrys-jobs/26051613/"
                    target="_blank" rel="noopener noreferrer">Asbury Park Press.</a></p>
            </span>
            <p>KEANSBURG – My hand is hovering over the button. I am waiting for the signal, a thumbs up, from my colleague in the lookout tower.</p>
            <p>I'm about to send two teenage girls hurtling 10 stories skyward at a speed of 35 miles an hour.</p>
            <p>This is the closest I'll ever come to launching a rocket ship....</p>
        </div>
    </div>
</body>