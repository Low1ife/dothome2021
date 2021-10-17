<?php
    include "../connect/session.php";

    unset($_SESSION['myMemberID']);
    unset($_SESSION['youEmail']);
    unset($_SESSION['youName']);
?>

<script> 
    alert("로그아웃 되었습니다. 잘가용가리🦖");
    location.href="/index.php";
</script>