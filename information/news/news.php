<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <title>News</title>
    <style>
        .main-heading{
            margin-bottom: 50px;
            height: 150px;
            width: 100%;
            background-image: url(https://keansburgamusementpark.com/wp-content/uploads/2015/01/IMG_8460e.jpg);
            background-size: cover;
            background-attachment: fixed;
            text-align: center;
            padding-top: 50px;
        }
        .row{
            display: flex;
            justify-content: flex-end;
            width: 60%;
            margin: 0 auto;
            margin-bottom: 40px;
        }
        .image{
            height: 500px;
            width: 380px;
            background-size: cover;
            text-align: center;
            cursor: pointer;
        }
        .data1{
            width: 425px;
        }
        .content{
            width: 400px;
            font-size: 17px;
            margin-right: 40px;
            padding-left: 20px;
            background-color: rgb(250, 249, 249);
        }
        .content h2{
            font-size: 30px;
        }
        .content p{
            line-height: 25px;
        }
        .content h2,
        .main-heading h1{
            font-family: 'La Belle Aurore', cursive;
            color: purple;
        }
        .anh{
            width: 300px;
            height: 100px;
            background-image: url(https://keansburgamusementpark.com/wp-content/uploads/2015/04/read_more.png);
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="main-heading">
            <h1>News & Press Releases</h1>
        </div>
        <div class="main-body">
            <?php
                $conn = mysqli_connect('localhost','root','','library');
                $sql = "SELECT id,title,thumnail,note,date FROM famous WHERE category_id = 13";

                $result = mysqli_query($conn,$sql);
                $data = [];
                while(($row = mysqli_fetch_array($result,1)) != null) {
                    $data[] = $row;
                }
                for ($i=0; $i < count($data); $i++) { 
                    echo '
                        <div class="row">
                            <div class="image data'.$data[$i]['id'].'" style="background-image:url(\''.$data[$i]['thumnail'].'\');">
                                <p> </p>
                            </div>
                            <div class="content">
                                <h2>'.$data[$i]['title'].'</h2>
                                <p>'.$data[$i]['date'].'</p>
                                <p>'.$data[$i]['note'].'</p>
                                <a href="http://"><div class="anh"></div></a>
                                
                                
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</body>
</html>