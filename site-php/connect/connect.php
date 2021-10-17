<?php
    $host = "localhost";
    $user = "kws7902";
    $pass = "qoxmfspt23!";
    $db = "kws7902";
    $connect = new mysqli($host, $user , $pass , $db);
    $connect -> set_charset("utf8");

    if( mysqli_connect_errno() ){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>