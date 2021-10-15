<?php
    include "../connect/connect.php";

    $sql = "CREATE table myLike(";
    $sql .= "rg_id int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "mb_id int(10) NOT NULL,";
    $sql .= "rg_datetime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (rg_id)) CHARSET=utf8;";
    $result = $connect -> query($sql);
    if($result) {
        echo "Create Board table true";
    } else {
        echo "Create Board table false";
    }
?>