<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <style>
        
        .row{
            display: flex;
            width: 50%;
            margin: 0 auto;
            background-color: rgb(219, 219, 219);
            margin-bottom: 20px;
        }
        .image{
            background-size: cover;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="heading-main">
            <h1>News & Press Releases</h1>
        </div>
        <div class="main-body">
            <?php
                $conn = mysqli_connect('localhost','root','','library');
                $sql = "SELECT id,title,thumnail,note,date FROM famous";

                $result = mysqli_query($conn,$sql);
                $data = [];
                while(($row = mysqli_fetch_array($result,1)) != null) {
                    $data[] = $row;
                }
                for ($i=0; $i < count($data); $i++) { 
                    echo '
                        <div class="row">
                            <div class="image data'.$data[$i]['id'].'" style="background-image:url(\''.$data[$i]['thumnail'].'\'); width:2400px">
                                <p> </p>
                            </div>
                            <div class="content">
                                <h1>'.$data[$i]['title'].'</h1>
                                <p>'.$data[$i]['date'].'</p>
                                <p>'.$data[$i]['note'].'</p>
                                <a href="http://">read more</a>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</body>
</html>