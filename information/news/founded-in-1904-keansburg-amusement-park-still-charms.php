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
            <h1>Founded in 1904, Keansburg Amusement Park still charms</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/catepillar-ride.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on </p>
                <a href="https://cm.app.com/offers-reg/?return=https%3A%2F%2Fwww.app.com%2Fstory%2Fentertainment%2Fevents%2F2014%2F08%2F20%2Ffounded-keansburg-amusement-park-still-charms%2F14343591%2F" target="_blank" rel="noopener noreferrer">Asbury Park Press</a>
            </span>
            <p>In 1904, William Gehlhaus convinced five investors to join him in purchasing an area of marshland overlooking Raritan Bay, in hopes of creating a resort area.</p>
            <p>It was a bold move, especially because Gehlhaus was a baker from Atlantic Highlands, with no experience in real estate development.</p>
            <p>Nevertheless, Gehlhaus and his partners founded the New Point Comfort Beach Company and set about filling in the marsh with sand from the bay. The company quickly went beyond plans for a boardwalk and vacation bungalows, adding a water company and two banks.</p>
            <p>In 1909, Gehlhaus founded the Keansburg Steamboat Company to bring visitors across the bay from New York City. He built a dance hall and the New Point Hotel and added amusements, including a Ferris wheel.</p>
            <p>The earliest rides are gone, and the wooden boardwalk was replaced with a paved walkway after a hurricane in 1944. The steamboat ferries stopped running after another hurricane destroyed the pier in 1960. But Keansburg Amusement Park still operates some of the same kiddie rides it debuted in the 1920s and '30s, painstakingly restored and maintained, with many others dating from the 1960s.</p>
            <p>"It's no secret that grandparents come here every day to show their grandchildren what rides they rode when they were kids," said Hank Gehlhaus, grandson of founder William. "It's very, very important to us that that legacy continues."</p>
            <p>The borough of Keansburg, which was incorporated in 1917, basically grew up around William Gehlhaus' vision of summertime fun. And 110 years later, Keansburg, "the gem of the Bayshore," is still best known for its namesake amusement park.</p>
            <p>"The kids are having a good time, and it's close to home,'' said Josephine Prestia of Matawan on a recent crystalline afternoon at the park. "It's great when you have some last-minute free time, because we can get here fast and have fun.''</p>
            <p>Prestia brought her children, Gabriella, 9, and Robert, 7, to the kiddie rides, where they enjoyed the Super Slide and the Happy Swing. Robert wore a sign around his neck that read, "I won my goldfish tank today," referring to the prize he won at one of Keansburg's games of chance.</p>
            <p>"They'll hold the fish for him until we're done with the rides, and that's like his receipt," Prestia said. "It's so cute – they do a lot of nice things like that here."</p>
            <p>On Aug. 28, Keansburg Amusement Park will celebrate its 110th anniversary with price specials of $1.10 on certain concession foods, games and other attractions. There also will be a pancake-eating contest, sponsored by IHOP.</p>
            <p>"My grandfather really filled in a good part of Keansburg," said Hank Gehlhaus, who now owns the park with his brother, also named William. "It was all marshland. He created half the town."</p>
            <p>Hank Gehlhaus has been running Keansburg Amusement Park with William and their respective families for 20 years.</p>
            <p>Their father, Henry Gehlhaus, had sold the family business in 1972, due to health concerns that turned out to be premature.</p>
            <p>Hank kept a foot in the door, so to speak, by running concession stands at the park. When he saw his chance to re-claim the park, he jumped at it.</p>
            <p>"We were heartbroken when my dad sold it," Hank said. "I was only 12 and William was 16. But my dad thought he was doing the right thing – he wanted us all provided for, and he wanted everything settled. He was getting migraines, and he had gotten it into his head that he had a brain tumor."</p>
            <p>Hank can now relate to the pressure his father must have felt.</p>
            <p>"The first year I ran the park, I got a kidney stone," Hank said. "There was definitely a learning curve for me. It took me two or three seasons to get on my feet."</p>
            <p>The current Gehlhaus generation is responsible for one of the biggest expansions to the park, with the addition of Runaway Rapids in 1996, one of the first water parks in New Jersey.</p>
            <p>"Even with the cool summer we've had," Hank said, "Runaway Rapids has remained very popular."</p>
            <p>More recently, the Gehlhaus family contended with superstorm Sandy, which destroyed the Wildcat rollercoaster and severely flooded and damaged many other parts of the park in October 2012.</p>
            <p>The vintage kiddie rides came apart and were scattered beyond Keansburg, but the amusement park eventually recovered and restored every piece.</p>
            <p>A new rollercoaster, the Looping Star, has been built to replace the Wildcat, pending state inspections.</p>
            <p>Neither hurricanes nor recessions can keep this place down for long. In addition to its vintage kiddie rides, Keansburg Amusement Park is known for its affordability and its friendly staff, with employees in their teens as well as in their late 70s. Pull into the sandy parking lot by the batting cages and you will be greeted warmly by the attendant. Plus, it only will set you back $5 to park there, all day.</p>
            <p>"We want to make it affordable for everyone,'' Hank said. "We want families to be able to come back again and again."</p>
            <p>As a child, Hank Gehlhaus was well accustomed to the razzle-dazzle of his family's business, because he tagged along with his father during the work day.</p>
            <p>"I never lost sight of it, how magical it was," he said.</p>
            <p>The amusement park changed little from the 1930s to '50s, Hank said, but subsequent decades brought demand for continuous novelty.</p>
            <p>"It's a measure of our fast-paced society that everybody always wants to see something new," Hank said. "We really prefer the old stuff, but we always mix it up so there is something new for people, however small it might be. Like, my wife found these cotton-candy cones that are LED-driven, so that when you buy cotton candy at night, you walk around the park and it looks like you're eating something that's lit up."</p>
            <p>One thing Hank expects to remain constant is his family's connection to Keansburg Amusement Park.</p>
            <p>"I have five children," he said, "and they're eager to take it over when I'm ready to step down."</p>
        </div>
    </div>
</body>