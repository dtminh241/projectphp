<?php
// chuyển title thành href_param
    $conn = mysqli_connect('localhost', 'root', '', 'library');
    $sql = "SELECT title FROM famous";
    $result = mysqli_query($conn, $sql);
    $data = [];
    while (($row = mysqli_fetch_array($result, 1)) != null) {
        $data[] = $row;
    }
    for ($i=0; $i < count($data); $i++) { 
        $data[$i]['title'] = preg_replace('/\W/',' ',$data[$i]['title']);
        $data[$i]['title'] = trim($data[$i]['title'],' ');
        $href[] = [
            'href_param'=>preg_replace('/    |   |  | /','-',strtolower($data[$i]['title']))
        ];
    }
    for ($i=0; $i < count($data); $i++) { 
        $sql = 'UPDATE famous SET href_param = "'.$href[$i]['href_param'].'" WHERE id = '.$i+1;
        mysqli_query($conn, $sql);
    }
    mysqli_close($conn);
?>