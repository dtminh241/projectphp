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
            <h1>Keansburg Amusement Park ready to open</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/03/RockinTug.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on <a href="https://patch.com/new-jersey/middletown-nj/keansburg-amusement-parks-opens-season-april-8"
                    target="_blank" rel="noopener noreferrer">NJ.com</a></p>
            </span>
            <p>KEANSBURG - The Keansburg Amusement Park is set to open this weekend for the 2015 season.</p>
            <p>Several new attractions and rides have been restored. Park owner William Gelhaus says it's a great place to celebrate the nicer weather.</p>
            <p>"We're expecting great things. This is the first weekend after a miserable winter and everyone is trying to get out. So we're expecting one of our biggest days of the year," says Gelhaus.</p>
            <p>Owners say they expect a new looping coaster to be one of this season's biggest attractions. Visitors of the park will have to wait until the ride is properly inspected, however.</p>
        </div>
    </div>
</body>