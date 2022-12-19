<head>
    <style>
        h1{
            color: purple;
        }
        .main{
            width: 80%;
            margin: 0 auto;
        }
        img{
            width: 1202px;
        }
    </style>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'library');
        $sql = "SELECT name, note FROM category WHERE id = 15";
        $data = [];
        $result = mysqli_query($conn,$sql);
        while (($row = mysqli_fetch_array($result,1)) != null) {
            $data[] = $row;
        }
    ?>
    <div class="main">
        <h1><?=$data[0]['name']?></h1>
        <div class="image">
            <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">
        </div>
        <p><b><?=$data[0]['name']?></b></p>
        <p><?=$data[0]['note']?></p>
    </div>
</body>