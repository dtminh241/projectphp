<?php
// chuyển title thành href_param
    $conn = mysqli_connect('localhost', 'root', '', 'library');
    $sql = "SELECT title FROM famous";
    $result = mysqli_query($conn, $sql);
    $data = [];
    while (($row = mysqli_fetch_array($result, 1)) != null) {
        $data[] = $row;
    }
    
    $href = [];
    for ($i=0; $i < count($data); $i++) { 
        $href[] = [
            'href_param'=>str_replace(' ', '-',trim(preg_replace('/([^\pL\.\ ]+)/u', '',strtolower($data[$i]['title']))))
        ];
        $sql = 'UPDATE famous SET href_param = "'.$href[$i]['href_param'].'" WHERE id = '.$i+1;
        mysqli_query($conn, $sql);
    }
    mysqli_close($conn);
?>