<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <!-- style -->
    <link rel="stylesheet" href="../asset/css/fonts.css">
    <link rel="stylesheet" href="../asset/css/var.css">
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>
    <div id="skip">
        <a href="#contents"class="ir_so">컨텐츠 바로가기</a>
        <a href="#footer"class="ir_so">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    <header id="header">  
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

<div class="bg">
<main id="board_contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <div class="boardType">
                    <h3><a href="board.php">게시판</a> <span>| 커뮤니티</span></h3>
                    <div class="board">
                        <div class="board-table mt30">
                                <?php
                                    $boardID = $_GET['boardID'];

                                    $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) WHERE b.myBoardID = {$boardID}";
                                    $result = $connect -> query($sql);

                                    $view = "UPDATE myBoard SET boardView = boardView+1 WHERE myBoardID = {$boardID}";
                                    $connect -> query($view);

                                    // 좋아요 카운트
                                    //$sql2 = "SELECT rg_id AS count FROM myLike WHERE mb_id = '{$member['mb_id']}' ";
                                    //$row2 = sql_fetch($sql2);
                                    //$cnt = $row2['count'];

                                    if($result){
                                        $info = $result -> fetch_array(MYSQLI_ASSOC);
                                        
                                        echo "<div class='title'>제목 | ".$info['boardTitle']."</div>";
                                        
                                        echo "<div class='wrap'>";
                                        echo "<div class='circle'></div>";

                                        echo "<div class='text_wrap'>";
                                        echo "<div class='name'>".$info['youName']."</div>";
                                        echo "<div class='date'>".date('Y-m-d H:i', $info['regTime'])."</div>";
                                        echo "<div class='view'>조회</div>".$info['boardView'];
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='text height view'>".$info['boardContent']."</div>";
                                    }
                                ?> 
                            <div class="btn">
                                <a href="boardModify.php?boardID=<?=$_GET['boardID']?>">수정하기</a>
                                <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" onclick="confirm('정말 삭제하시겠습니까?')">삭제하기</a>
                                <a href="board.php">목록보기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

</div>

     <script>
         $(document).ready(function(){
            $('#btn_like<?php echo $row['is_id'];?>').click(function(){
                $.ajax({ type: 'POST', url: 'like.php', data: { it_id : "<?php echo $it_id;?>", is_id : "<?php echo $row['is_id'];?>", mb_id : "<?php echo $member['mb_id'];?>" }, success: function(data) { if(data) { $("#btn_like<?php echo $row['is_id'];?>").html(data); } } }); }); });


     </script>                               
</body>
</html>