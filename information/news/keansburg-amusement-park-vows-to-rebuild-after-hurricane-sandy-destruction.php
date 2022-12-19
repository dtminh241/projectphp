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
        .main-right img{
            width: 847.5px;
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
            <h1>Keansburg Amusement Park vows to rebuild after Hurricane Sandy destruction</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2012/11/hurricane-sandy-rebuild.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on <a href="https://patch.com/new-jersey/middletown-nj/keansburg-amusement-parks-opens-season-april-8" target="_blank" rel="noopener noreferrer">NJ.com</a></p>
            </span>
            <p>KEANSBURG — Just days after getting battered by Hurricane Sandy, the co-owner of the Keansburg Amusement Park and Runaway Rapids Waterpark has already set a reopening date: April 8, 2013.</p>
            <p>That gives the Gehlhaus Family and its crew five months five months to clear out several feet of sand caked inside the roller coasters and other rides damaged by the estimated 6-foot wall of water that pummeled the 108-year-old amusement park.</p>
            <p>About 300,000 people visit the water park, amusement park and concession stands every year. "The clock is ticking and we'll be ready for them," Gehlhaus said with enthusiasm.</p>
            <p>Gehlhaus said he and his brother have invested $4 million into the family business over the last 17 years, adding the water park and 30 rides, so they could one day turn it over to the next generation to run.</p>
            <p>Rebuilding "will be a challenge," but one he would "attack with a lot of energy," and help from a crew of about 25 so far.</p>
            <p>They've already gotten off to a good start. In the past two days, he and his crew have found portions of fence, machinery and pieces of disassembled rides that were stored away for the season.</p>
            <p>"We've retrieved almost everything," some of it a half-mile inland on people's yards or alleyways, he said. "Most everything will be cleaned and rehabilitated."</p>
            <p>Albert Marine Construction in Waretown also wasted no time in beginning work on restoring Keansburg shoreline.</p>
            <p>Just last week, the company had trucked in dredged sand to make 20-25-foot dunes. Sandy washed away all of their work. Two foremen on bulldozers returned Thursday to start over.</p>
            <p>"There was three feet of sand inside the rides," said Nick Hauser, one of the foremen. "They got banged up here really bad."</p>
        </div>
    </div>
</body>