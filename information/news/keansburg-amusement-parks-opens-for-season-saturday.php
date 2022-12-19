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
            <h1>Keansburg Amusement Parks Opens for Season Saturday</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2017/04/thepatch-0403.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on</p>
                <a href="https://patch.com/new-jersey/middletown-nj/keansburg-amusement-parks-opens-season-april-8"
                    target="_blank" rel="noopener noreferrer">Patch.com</a>
            </span>
            <p>By <a href="https://patch.com/users/carly-baldwin-0">Carly Baldwin, (Patch Staff)</a></p>
            <p><b>KEANSBURG, N.J.</b> — Keansburg Amusement Park will officially open for the season Palm Sunday weekend, April 8 and 9, the park has confirmed. The amusement park will be open all spring break at 12 noon through Monday, April 17 (weather permitting). And the mermaids will be back this summer: Beginning Monday, June 26th Runaway Rapids will have live Mermaids swimming with guests every Monday during the 2017 season.</p>
            <p>And as <a href="https://patch.com/new-jersey/middletown-nj/keansburg-amusement-park-s-easter-egg-hunt-will-be-april-9" style="font-size:16px;">we already told you</a>, Keansburg Amusement Park will also hold its annual Easter egg hunt on Sunday, April 9 this year, beginning at 1 p.m., rain or shine.</p>
        </div>
    </div>
</body>