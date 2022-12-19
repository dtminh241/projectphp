<head>
    <style>
        .main {
            display: flex;
            width: 80%;
            margin: 0 auto;
        }

        .main-left {
            margin-right: 60px;
            margin-top: 20px;
        }

        .main-left h3 {
            margin-left: 20px;
            border-bottom: solid 1px gray;
            color: purple;
        }

        .main-left a:hover {
            cursor: pointer;
            color: orange;
        }

        .main-right h1 {
            color: purple;
        }

        .main-right p {
            margin-top: 25px;
            line-height: 25px;
        }

        .main-right p a {
            color: blue;
            font-size: 12px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        ul li {
            margin-bottom: 10px;
            color: orange;
        }

        .small {
            font-size: 12px;
            line-height: 5px;
            color: grey;
        }

        .small p {
            margin-top: 15px;
            line-height: 5px;
        }

        .small a {
            color: blue;
        }

        .main-left {
            width: 240px;
        }

        .main-right {
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
            <h1>Construction begins on new Keansburg roller coaster to replace the ‘Wild Cat’ that was destroyed by Sandy</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2014/01/keansburg-construction.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on <a href="https://patch.com/new-jersey/middletown-nj/keansburg-amusement-parks-opens-season-april-8" target="_blank" rel="noopener noreferrer">New Jersey 12</a></p>
            </span>
            <p>KEANSBURG - Construction has begun on a new ride at Keansburg Amusement Park to replace the "Wild Cat" coaster mangled by the superstorm.</p>
            <p>The foundation is down for the new roller coaster, and parts of it have also arrived. It will have a loop taking passengers upside down.</p>
            <p>"Keansburg was known for the roller coaster amongst a couple of other major attractions," says Katie Johnson, of Keansburg Amusement Park. "And I think that this particular roller coaster is going to bring back the new blood."</p>
            <p>Right now the sign on it reads "Looping Star," but a spokesperson says the amusement park will have an online contest to come up with an original name.</p>
            <p>The roller coaster is scheduled for completion by <b>March 1</b>.</p>
        </div>
    </div>
</body>