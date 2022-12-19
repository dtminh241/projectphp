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
            <h1>Sandy-ravaged Keansburg Amusement Park ready for Easter after exhausting repairs</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2013/04/keansburg-easter.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on <a href="https://patch.com/new-jersey/middletown-nj/keansburg-amusement-parks-opens-season-april-8" target="_blank" rel="noopener noreferrer">New Jersey 12</a></p>
            </span>
            <p>Pattie Cappuccio never doubted it.</p>
            <p>Not even the day after the storm, when her game booths at Keansburg Amusement Park were covered in knee-deep sand, left behind by chest-high flood waters.</p>
            <p>"I knew Bill and Hank (Gehlhaus) would get us open. I really did," she said, as she opened the family-run concession for their 26th season. "I knew their crew would get us ready."</p>
            <p>So there she was last weekend, with colorful, stuffed dolls pegged to walls and hanging overhead; prizes for a game where over-sized basketballs and undersized hoops make winning harder than it looks, easier said than done.</p>
            <p>Same goes for the park’s opening.</p>
            <p>In the days following Hurricane Sandy, the Gehlhaus brothers promised their park would open by Easter, just like every year.</p>
            <p>This promise was made while their rides were broken and scattered around town, carried off by the Raritan Bay waves that the flattened dunes and severely damaged every arcade building and food stand at the park.</p>
            <p>"One of the bumper cars — the green one — was in my parking spot," said C.C. Wereta, who lives in a condo a block away, as she walked the midway Sunday. Worse, a funhouse mannequin floated into her garage. "I thought it was somebody who drowned."</p>
            <p>The only drowning, though, would be in work. Five months of nothing but eat, work and sleep, has drained them.</p>
            <p>"Yeah, we’re tired," said Hank Gehlhaus, whose eyes show the weariness. "And it’as been tough. We just got our electricity back last week, because JCP&L ran out of meters. But we’re back, and we want to show people we’re better than we were."</p>
            <p>The grand opening is this weekend, and Hank Gehlhaus said the park will be about "70 percent" ready.</p>
            <p>"(Last) weekend was a soft opening," said Bill Gehlhaus. "We wanted people to see how far we’ve come and we’re selling our 2-for-1 discount tickets for the season."</p>
            <p>So while a couple of kiddie rides went ‘round and ‘round at one end of the park, and go-karts raced at the other, electricians and plumbers and carpenters nearly outnumbered visitors along the macadam midway.</p>
            <p>One of those plumbers was Stan Ambro, who is also the owner of "Hollowgraves," a haunted mansion that was on Seaside’s Funtown Pier. The house is now on three trailers on a Keansburg Amusement Park back lot, and Ambro hopes to have it erected and reopened soon.</p>
            <p>"I’m glad to be back home," said Ambro, who started at Keansburg in 2002. "The Gehlhauses are showmen. They understand the business."</p>
            <p>The park has been in the Gehlhaus family for over 100 years, except for a 23-year span when it was sold by the brothers’ father. They bought it back in 1995.</p>
            <p>"This is what we do," Bill Gehlhaus said days after the storm. "We’re not going anywhere."</p>
            <p>But they will continue now without two star attractions. The Wildcat roller coaster, the ride closest to the bay, was buried and bent by sand. Hank Gehlhaus said it would have cost $500,000 to restore, and "we just didn’t think it was worth it."</p>
            <p>The vintage bumper cars were another casualty.</p>
            <p>"That hurts, from an emotional standpoint," Hank Gehlhaus said. "They were in service in this park for 50 years. It’s a shame."</p>
            <p>The Wildcat will be replaced by a newer, looping coaster from Canada; new bumper cars are coming from the Italian ridemaker Bertazzon.</p>
            <p>"We also have a new swing ride, from a park in Alabama," Hank Gehlhaus said.</p>
            <p>The heart of the park — the old-school kiddie rides — remain intact. All the engines and electrical circuits were rebuilt, and last weekend, the fire engines and sky rockets were doing their usual laps, with children clutching steering wheels while parents smiled and took pictures from outside the gates.</p>
            <p>Joe Schmidt was there with his daughter, Julia, 5, making her memories while reliving his own.</p>
            <p>"We came here at least once a week, when I was a kid," said Schmidt, an elementary school principal. "When I think of all I got out of this place, I wanted to come down and support them. I’m glad they rebuilt it."</p>
        </div>
    </div>
</body>