<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<?php 
    $title = "굿밤 | 수정하기";
    include "../include/head.php";
?>
<body>

    <!-- <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div> -->
    <!-- //skip -->


    

    <?php
        include "../include/header.php";
    ?>
  
    <!-- //header -->


<div class="bg">
    <main id="board_contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content_article">
                <div class="boardType">
                    <h3>수정하기 <span>게시글의 제목과 내용을 수정할 수 있습니다.</span></h3>

                    <section class="boardModify">
                        <form action="boardModifySave.php" name="boardModify" method="post">
                            <fieldset>
                                <legend class="ir_so">게시판 수정 영역입니다.</legend>
                                <?php
                                        $boardID = $_GET['boardID'];
                                        $sql = "SELECT b.boardTitle, b.boardContent, m.youName FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myBoardID = {$boardID}";
                                        $result = $connect -> query($sql);
                                        if($result){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo"<div style='display:none'><label for='boardID'>번호</label>";
                                            echo"<input type='text' name='boardID' id='boardID' value='".$_GET['boardID']."'></div>";
                                            echo"<div><label for='boardTitle'>제목</label>";
                                            echo"<input type='text' name='boardTitle' id='boardTitle' value='".$info['boardTitle']."'></div>";
                                            echo"<div><label for='boardContent'>내용</label>";
                                            echo"<textarea name='boardContent' id='boardContent' rows='13'>".$info['boardContent']."</textarea></div>";
                                            echo"<div><label for='boardPass'>비밀번호</label>";
                                            echo"<input type='password' name='boardPass' id='boardPass' placeholder='로그인 비밀번호를 입력해주세요.' autocomplete='off' required></div>";
                                        }
                                    ?>
                                
                                <!-- <div>
                                    <label for="boardTitle">제목</label>
                                    <input type="text" name="boardTitle" id="boardTitle" class="title-text" placeholder="수정할 제목을 입력해주세요.">
                                </div>
                                <div>
                                    <label for="boardContent">내용</label>
                                    <textarea type="text" name="boardContent" id="boardContent" rows="13" placeholder="수정할 내용을 입력해주세요."></textarea>
                                </div>
                                <div>
                                    <label for="boardPass">비밀번호</label>
                                    <input type="password" name="boardPass" id="boardPass" placeholder="로그인 비밀번호를 입력해주세요." autocomplete="off" required>
                                </div> -->
                            </fieldset>
                            <button class="btn" type="submit" value="저장하기">저장하기</button>
                        </form>
                    </section>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->
</div>



        
</body>
</html>