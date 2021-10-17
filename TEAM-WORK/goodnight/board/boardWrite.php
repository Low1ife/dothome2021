<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<?php
    $title = "굿밤 | 글쓰기";
    include "../include/head.php";
?>
<body>

    <div id="skip">
        <a href="#contents" class="ir_so">컨텐츠 바로가기</a>
        <a href="#footer" class="ir_so">푸터 바로가기</a>
    </div>
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
                            <h3>글쓰기<span>게시글을 작성해주세요.</span></h3>

                            <div class="boardWrite">
                                <form action="boardWriteSave.php" name="boardWrite" method="post">
                                    <fieldset>
                                        <legend class="ir_so">게시판 글쓰기 영역입니다.</legend>
                                        <div class="boardTitle">
                                            <label for="boardTitle">제목</label>
                                            <input type="text" name="boardTitle" id="boardTitle" class="title-text" placeholder="제목을 입력해주세요." required autofocus>
                                        </div>
                                        <div>
                                            <label for="boardContent">내용</label>
                                            <textarea name="boardContent" id="boardContent" rows="13" class="title-text" placeholder="내용을 작성해주세요." required></textarea>
                                        </div>
                                    </fieldset>
                                    <button class="board-btn" type="submit" value="저장하기">저장하기</button>
                                </form>
                            </div>
                        </div>
                    </article>
                </section>
            </main>
        </div>
        <!-- //contents -->
        
</body>
</html>