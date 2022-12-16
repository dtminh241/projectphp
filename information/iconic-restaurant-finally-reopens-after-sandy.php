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

        a {
            text-decoration: none;
            color: black;
        }

        ul li {
            margin-bottom: 10px;
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

        .main-inside,
        .main-body-end{
            display: flex;
        }
        .main-body-inside{
            margin-right: 220px;
        }
        .main-body-inside p:last-child{
            margin-bottom: 0px;
        }
        .main p{
            margin-top: 15px;
        }
        .main-body-left,
        .main-body-end-right {
            width: 180px;
            border: 1px solid gray;
        }

        .image-note {
            width: 540px;
            border: solid 1px gray;
        }

        .image-note p {
            margin: 5px;
        }

        span {
            font-size: 12px;
        }

        .main-body-right p:first-child {
            margin-top: 0px;
        }

        .main-body-left {
            margin-top: 15px;
            margin-right: 10px;
        }
        .main-body-left p,
        .main-body-end-right p{
            margin: 5px;
        }
        .main-body-end-left p{
            margin-right: 30px;
        }
        .main-body-end-right{
            margin-top: -230px;
        }
    </style>
</head>

<body>

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
                <h1>Iconic Restaurant Finally Reopens After Sandy</h1>
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/09/olde-heidelberg-5.jpg" alt="">
                <span class="small">
                    <p>This article originally appeared on</p>
                    <a href="https://www.app.com/story/entertainment/dining/2015/08/26/old-heidelberg-inn-reopens/32404121/" target="_blank" rel="noopener noreferrer">Asbury Park Press</a>
                </span>
                <p>Three years ago this fall, a now infamous storm came calling.</p>
                <p>It blew across our beaches, ripped apart our hometowns and then retreated, taking with it much of what we love about life at the Shore.</p>
                <p>Earlier this month, we got a piece of that old life back.</p>
                <div class="image-note">
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/09/olde-heidelberg-1.jpg" alt="">
                    <p>Allison Gehlhaus and her husband, Hank, hold a photo of Old Heidelberg Inn, a hot dog spot that opened in the 1930s and was destroyed by superstorm Sandy in 2012. Hank and his brother, Bill, reopened the famed hot dog spot at Keansburg Amusement Park earlier this month. THOMAS P. COSTELLO/STAFF PHOTOGRAPHER <span>(Photo: THOMAS P. COSTELLO/STAFF PHOTOGRAPHER)</span></p>
                </div>
                <p>Brothers Hank and Bill Gehlhaus, who own the superstorm Sandy-ravaged Keansburg Amusement Park, reopened Olde Heidelberg Aug. 8. The park’s iconic hot dog restaurant, which dates back to the 1930s, had been flooded and destroyed.</p>
                <p>“When people come in, their jaws drop open,” said Hank Gehlhaus, who is 58 and has “worked here my whole life. They say, ‘It’s the Heidelberg, but even more beautiful than I remember it.’”</p>
                <p><b>A long way back</b></p>
                <p>The Heidelberg, as Gehlhaus calls it, opened in 1934, when hot dogs could be purchased for a nickel. The brothers, whose family owned the amusement park from 1904 through the ’70s and who bought the park back in 1995, took over the operation of Olde Heidelberg following the storm.</p>
                <p>“The Heidelberg was right at ground zero of the damage,” said Hank Gehlhaus, who lives in Rumson. His brother, Bill, is 62 and lives in Atlantic Highlands. “There was more of the water here than anywhere else; it took a direct hit.</p>
                <div class="image-note">
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/09/olde-heidelberg-2.jpg" alt="">
                    <p>Old Heidelberg Inn, destroyed by superstorm Sandy, brings famous griddle dogs back to Keansburg. <span>(Photo: THOMAS P. COSTELLO/STAFF PHOTOGRAPHER)</span></p>
                </div>
                <p>“When we got to it, the only thing we could save were the original tables, beautiful wooden tables with marble tops,” he said. “Everything else was ruined in the storm; we had to come in and redo everything.”</p>
                <p>The restoration took a year, but the pride in Gehlhaus’ voice when he talks about the Heidleberg makes it clear: Their hard work was worth it.</p>
                <p>“This is such a key part of the amusement park, a key part of the Bayshore,” he said. “We realized it was such an icon, and that this deserves a special bit of attention. We said let’s take our time, let’s make the place look like a palace.</p>
                <p>“Everything is brand new and meticulously installed to mirror the original Heidelberg,” Gehlhaus said. “I want it to last. I want this place to be timeless. I want my kids to come here, want their kids to come here. I want to make this for the ages.”</p>
                <div class="main-inside">
                    <div class="main-body-left">
                        <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/09/olde-heidelberg-3.jpg" alt="">
                        <p>Allison Gehlhaus serves up a hot dog from the griddle at the reopened Olde Heidelberg in Keansburg. <span>(Photo: THOMAS P. COSTELLO/STAFF PHOTOGRAPHER)</span></p>
                    </div>
                    <div class="main-body-right">
                        <p><b>Take a bite</b></p>
                        <p>The Heidelberg was famous for its griddle franks and draft beer, “that was its claim to fame through the generations,” Gehlhaus said.</p>
                        <p>When it came time to rebuild, he was determined to keep it that way.</p>
                        <p>“We had to search for months to find just the right blend of pork and beef and just the right amount of crunch,” Gehlhaus said, adding that he tastes a hot dog every day to make sure the flavor is consistent.</p>
                        <div class="main-body-inside">
                            <p>You can have your Heidelberg dog topped with sweet or hot relish, spicy mustard, sauerkraut, homemade chili or caramelized onions, which Gehlhaus’ wife, Allison, cooks all morning in a mix of wine and sugar. A hot dog costs $2.95; the relishes, sauerkraut and condiments are complimentary and the addition of onions or chili costs 50 cents.</p>
                            <p>And don’t forget a cold beer from the full bar to wash it all down.</p>
                            <p>“People are so happy. Everybody has a smile on their face, the kids are</p>
                        </div>
                    </div>
                </div>
                <div class="main-body-end">
                    <div class="main-body-end-left">
                        <p>drinking root beer and birch beer,” Gehlhaus said. “People are coming in and they are being wheeled in by their children, they are in their 70s, their 80s, their 90s and they’re coming in to relive the Heidleberg experience from when they were a child.</p>
                        <p>“It’s been so gratifying,” he said. “It’s so nice to bring something back that people thought was gone forever.”</p>
                    </div>
                    <div class="main-body-end-right">
                        <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/09/olde-heidelberg-4.jpg" alt="">
                        <p>The Olde Heidelberg is known for its griddled hot dogs, which come with sweet or hot relish, spicy mustard, sauerkraut, homemade chili or caramelized onions. <span>(Photo: THOMAS P. COSTELLO/STAFF PHOTOGRAPHER)</span></p>
                    </div>
                </div>
            </div>
        </div>
    </body>