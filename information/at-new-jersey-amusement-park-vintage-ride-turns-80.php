<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keansburg Amusement Parks Opens for Season Saturday</title>
    <style>
        .main{
            display: flex;
            width: 80%;
            margin: 0 auto;
        }
        .main-left{
            margin-right: 60px;
        }
        .main-left h3{
            margin-left: 20px;
            border-bottom: solid 1px gray;
            color: purple;
        }
        .main-right h1{
            color: purple;
        }
        .small{
            font-size: 12px;
            line-height: 5px;
            color: grey;
        }
        .small a {
            color: blue;
        }
        .main-body-inside{
            display: flex;
        }
        .main-body-left p:first-child {
            margin-top: 0;
        }
        .main-body-right{
            margin-left: 30px;
            width: 180px;
            border: solid 1px gray;
        }
        .main-body-right p{
            margin: 5px;
            font-size: 14px;
            line-height: 20px;
        }
        .main-body-right span{
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
        .main-left a:hover{
            cursor: pointer;
            color: orange;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="main-left">
            <h3>Recent News</h3>
            <ul>
                <?php
                    $conn = mysqli_connect('localhost','root','','library');
                    $sql = "SELECT title FROM famous";
                    $result = mysqli_query($conn,$sql);
                    $data = [];
                    while (($row = mysqli_fetch_array($result,1)) != null) {
                        $data[] = $row; 
                    }
                    mysqli_close($conn);
                    for ($i=0; $i < count($data); $i++) { 
                        echo '
                            <li><a href="http://">'.$data[$i]['title'].'</a></li>
                        ';
                    }
                ?>
            </ul>
        </div>
        <div class="main-right">
            <h1>At New Jersey amusement park, vintage ride turns 80</h1>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2017/04/usa-today-kap-3.jpg" alt="">
            <span class="small">
                <p>This article originally appeared on</p>
                <a href="https://www.usatoday.com/story/travel/nation-now/2017/04/09/keansburg-amusement-park-vintage-ride/100233186/"
                    target="_blank" rel="noopener noreferrer">USA today</a>
            </span>
            <br>
            <p><b>KEANSBURG, N.J.</b> — One milestone birthday to celebrate as Keansburg Amusement Park opens in full
                this weekend: Its kiddie “pedal” cars turn 80.</p>
            <p>The seven vintage cars, painted yellow and green, have been carrying children around and around since the
                1930s.</p>
            <p>“It’s one of a kind, really,” marketing director Katie Johnson said. “They used to have pedals inside and
                you would ride them on the street. Someone created a ride out of it.”</p>
            <p>The ride is the oldest in the park, which was founded in 1904.</p>
            <div class="main-body-inside">
                <div class="main-body-left">
                    <p>“It’s essentially been the same for 80 years,” Johnson said. “Their bodies are steel, which these
                        days is unheard of. At one point they had little whistles and horns.”</p>
                    <p>The cars took a beating at the hands of superstorm Sandy in 2012. Seven of the eight survived.
                    </p>
                    <p>The eighth was “flat as a pancake,” Johnson said.</p>
                    <p>“We actually still have it,” she said. “The rest we sent to a shop in Middletown. They
                        hand-hammered out each car and painted them.”</p>
                    <p>Keansburg Amusement Park is known for its historic features, in a place built up from marshland
                        in a time when no one gave a second thought to draining the swamps.</p>
                    <p>The kids’ airplane ride also dates back to the 1930s. But the pedal cars stand out because of
                        their unmistakably classic design.</p>
                    <p>“One of the wonderful things about that particular ride and other historical rides — we get a lot
                        of grandparents and great aunts and uncles, generations of people who have been on that ride,”
                        Johnson said. “They’ll say, ‘I rode that ride in the '40s.’ It’s wonderful when we get people
                        who marvel at that fact and it brings back memories of them riding it.”</p>
                </div>
                <div class="main-body-right">
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2017/04/usa-today-kap-1.jpg" alt="">
                    <p>A boy rides the vintage kiddie pedal cars at the Keansburg Amusement Park. The ride turns 80 in
                        the 2017 season. <span>(Photo: Keansburg (N.J.) Amusement Park)</span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>