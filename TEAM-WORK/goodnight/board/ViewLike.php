<?php
    $it_id = $_POST['it_id']; 
    $is_id = $_POST['is_id']; 
    $mb_id = $_POST['mb_id'];

    if (!$is_member) { //회원이 아닌 경우 로그인 페이지로 이동 
        $href = '로그인URL'; alert('회원만 가능합니다.', $href); 
    }

    if (!($it_id && $is_id))
        alert('값이 제대로 넘어오지 않았습니다.');

        $sql = " SELECT rg_id as count from 테이블명 where mb_id = '{$mb_id}' ";
        $row = sql_fetch($sql); 
        $cnt = $row['count'];

    if ($cnt > 0) {
        sql_query(" DELETE from 테이블명 where mb_id = '{$mb_id}' ");


    


?>

