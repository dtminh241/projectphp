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
            width: 240px;
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
        .image{
            margin-top: 20px;
        }
        .image p{
            width: 528px;
            margin-top: 0px;
            border: solid 0.2px gray;
            padding: 5px;
        }
        h2{
            color: purple;
            font-family: 'Leckerli One', cursive;
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
            <h1>Pizza V Voted #2 by APP.com Summer Food Series</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/06/pizza-v.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on</p>
                <a href="https://patch.com/new-jersey/middletown-nj/keansburg-amusement-parks-opens-season-april-8"
                    target="_blank" rel="noopener noreferrer">Asbury Park Press</a>
            </span>
            <div class="image">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/06/pizza-v.jpg" alt="">
                <p>(Photo: COURTESY OF CARLY VENA)</p>
            </div>
            <h2>WHY VISIT:</h2>
            <p>"We have people that come from Florida to get the pizza because they grew up here and love our pizza," said James Carusotto, whose father, Anthony, owns Pizza V. The pizzeria has been on the boardwalk for nearly 50 years. "I was making pizza (on a recent Sunday), two ladies came up and said 'I came from Newark for this pizza.' And then last year, a customer told me he comes from Lodi just for our pizza. Lodi borders New York, it is probably a little over an hour away. Then he goes home."</p>
            <h2>THE PIZZA:</h2>
            <p>If you are a pizza purist, Pizza V on the boardwalk is the place for you. They keep things simple: "We only make plain pizza," Carusotto said, "but if someone brings pepperoni, etc., we will put it on the pizza." Their tomato sauce is homemade, and their pies are topped with mozzarella cheese.</p>
            <h2>WHERE:</h2>
            <p>Pizza V is at 275 Beachway Ave. on the Keansburg boardwalk; call 732-495-1292</p>
            <p>Click <a href="https://www.app.com/story/entertainment/dining/2015/06/09/boardwalk-pizza/28746465/">here</a> to read the entire article.</p>
        </div>
    </div>
</body>