<head>
    <style>
        .main{
            width: 80%;
            margin: 0 auto;
        }
        .row{
            display: flex;
            
        }
        .column{
            width: 283px;
            margin-left: 10px;
        }
        .column img{
            width: 283px;
            height: 200px;
        }
        .title-column{
            background-color: #e7e3c6;
            color:purple;
            height: 102.3px;
        }
        .title-column h2{
            margin: 0;
            font-family: 'Leckerli One', cursive !important;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 10px;
        }
        .end-column{
            height: 80px;
            background-color: #006BB4;
        }
        .end-column p{
            margin: 0;
            background-color: purple;
            border-radius: 50%;
            width: 82px;
            height: 82px;
            text-align: center;
            position: absolute;
            top: 370px;
            
        }
        .column0 p{
            left: 270px;
        }
        .column1 p{
            left: 570px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="main-heading">
            <h1>Events</h1>
            <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">

        </div>
        <div class="main-end">
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'library');
                $sql = "SELECT title,thumnail FROM famous WHERE category_id = 17";
                $result = mysqli_query($conn,$sql);
                $data = [];
                while(($row = mysqli_fetch_array($result,1)) != null) {
                    $data[] = $row;
                }
                mysqli_close($conn);
            ?>
            <div class="row">
                <?php
                    for ($i=0; $i < count($data); $i++) { 
                        echo '
                        <div class="column">
                            <div class="heading-column">
                                <img src="'.$data[$i]['thumnail'].'" alt="">
                            </div>
                            <div class="title-column">
                                <h2>'.$data[$i]['title'].'</h2>
                            </div>
                            <div class="end-column column'.$i.'">
                                <p>Choose</p>
                            </div>
                        </div>
                        ';
                    }

                ?>
                
            </div>
            
        </div>
    </div>
</body>