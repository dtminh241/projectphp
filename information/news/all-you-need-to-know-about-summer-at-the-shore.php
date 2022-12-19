<head>
    <style>
        .main{
            display: flex;
            width: 80%;
            margin: 0 auto;
        }
        .main-left{
            width: 214px;
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
        .main-right{
            width: 909px;
        }
        .main-right h1,
        .main-right h2{
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
        .image-note{
            width: 540px;
            border: 1px solid gray;
            margin-left: 10px;
        }
        .image-note p{
            margin: 5px;
        }
        .image-note span{
            font-size: 12px;
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
            <h1>All You Need to Know About Summer at the Shore</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/06/cliffhangar-app.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on</p>
                <a href="https://www.app.com/errors/404/"
                    target="_blank" rel="noopener noreferrer">Asbury Park Press</a>
            </span>
            <h2>Boardwalk & Dining</h2>
            <p>Time for lunch: If you're looking for something a little different, head to Shish Kabob Gourmet for shish kabobs and corn on the cob, both of which are grilled to order. There's also Cheesy's Pizza and Dylan's Walk-in Tacos and Hot Dogs; at the latter, enjoy a side of Fritos or Doritos mixed with taco seasonings.</p>
            <div class="image-note">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/06/olde-heidelberg-inn.jpg" alt="">
                <p>The Olde Heidelberg Inn, shown here in its heydey, is a 1930s hot dog joint that returns to the Keansburg boardwalk this summer. <span>(Photo: COURTESY OF KEANSBURG AMUSEMENT PARK)</span></p>
            </div>
            <p>Need a snack?: Get to Glenda's Great Fries for a boardwalk classic — hand-cut french fries served with vinegar.</p>
            <p><b>Dinner date</b>: At Miami Club, a sit-down spot, choose between a raw bar, homemade clam chowder, seafood or burgers — or try it all. There's also The Boardwalk Grill, serving up pulled pork, hamburgers, hot dogs and fries; Barb's Burritos, which offers traditional Mexican fare, and the newly renovated Olde Heidelberg Inn, a well-known hot dog joint that dates back to the 1930s and is coming back this year after being destroyed by superstorm Sandy.</p>
            <h2>Keeping cool in Keansburg</h2>
            <p><b>KEANSBURG AMUSEMENT PARK</b>: On Beachway Avenue adjacent to the Keansburg boardwalk. The amusement park includes bumper cars, kiddie rides, adolescent and adult rides, including roller coaster and scare house. The park is currently open daily with limited attractions at noon on weekdays, 11 a.m. on weekends. The full park will be running by late June. Park gates will open at 10 a.m., and the park is open until about 11 p.m. on weekdays, later on weekends. Food options include classic boardwalk fare and seafood. Alcohol is not permitted inside the parks. Fully restored Old Heidelberg Inn, destroyed by Sandy, will open during the summer. The park will have limited openings, weather permitting, through mid-October. For up-to-date information, check the park's website.</p>
            <div class="image-note">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/06/runaway-rapids-post.jpg" alt="">
                <p>Runaway Rapids water park in Keansburg is the perfect place to take a break from the heat of the beach. <span>(Photo: FILE PHOTO)</span></p>
            </div>
            <p><b>RUNAWAY RAPIDS WATER PARK</b>: The amusement park's companion is open from 10 a.m. to dusk, weather permitting. The park will be open on weekends starting Memorial Day weekend at 11 a.m. and will be open daily at 10 a.m. in early June. The water park's season ends the weekend after Labor Day.</p>
            <p><b>INFORMATION</b>: Beach, 732-787-0215; amusement parks, 732-495-1400.</p>
            <h2>Boardwalk Rides</h2>
            <p>The Bayshore's version of boardwalk excitement is centered in Keansburg. The venerable Keansburg Amusement Park celebrates its 111th anniversary this year, and is celebrating the occasion on Sept. 1, with $1.11 specials and other promotions.</p>
            <div class="image-note">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/06/cliffhangar-app.jpg" alt="">
                <p>The Cliff Hanger at Keansburg will make you feel like you can fly. <span>(Photo: Courtesy of Keansburg Amusement Park)</span></p>
            </div>
            <p>This summer, Keansburg Amusement Park introduces its new rollercoaster, Looping Star, which replaces the Wild Cat coaster that was destroyed by Sandy in October 2012. The Italian-made Pinfari ZL42 rollercoaster has one loop, offering turns, drops and over-the-edge twists.</p>
            <p>Other thrill rides at Keansburg include the Cliff Hanger, which will make you feel like you can fly.</p>
        </div>
    </div>
</body>