<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<?php
    $title = "굿밤 | 커뮤니티";
    include "../include/head.php"; 
?>
<body>

    <div id="skip">
        <a href="#contents" class="ir_so">컨텐츠 바로가기</a>
        <a href="#footer" class="ir_so">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
        <?php
            $title = "굿밤 | 커뮤니티";
            include "../include/header.php";
        ?>
  
    <!-- //header -->
<div class="bg">
    <main id="board_contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <div class="boardType">
                    <h3>커뮤니티 <span>수면 팁을 공유해보세요</span></h3>
                    <div class="board-search">
                            <form action="boardSearch.php" name="boardSearch" method="get">
                                <fieldset>
                                    <legend class="ir_so">게시판 검색 영역</legend>
                                    <select name="searchOption" id="searchOption" class="form-select">
                                        <option value="title" class="title">제목</option>
                                        <option value="content" class="content">내용</option>
                                        <option value="name" class="name">등록자</option>
                                    </select>
                                    <input type="search" name="searchKeyword" class="form-search" placeholder="검색" aria-label="search">
                                    <button type="submit" class="form-btn">검색</button>
                                </fieldset>
                            </form>
                        </div>
                    <div class="board">
                            <div class="board-table">
                                <table>
                                    <colgroup>
                                        <col style="width: 5%" />
                                        <col />
                                        <col style="width: 10%" />
                                        <col style="width: 12%" />
                                        <col style="width: 7%" />
                                        <!-- <col style="width: 5%" /> -->
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>제목</th>
                                            <th>작성자</th>
                                            <th>등록일</th>
                                            <th>조회수</th>
                                            <!-- <th>좋아요</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(isset($_GET['page'])){
                                                $page = (int) $_GET['page'];
                                            } else {
                                                $page = 1;
                                            }

                                            $numView = 10;
                                            $viewLimit = ($numView * $page) - $numView;

                                            $sql = "SELECT b.myBoardID, b.boardTitle, m.youName, b.boardView, b.regTime FROM myMember m JOIN myBoard b ON (m.myMemberID = b.myMemberID) ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$numView}";
                                            $result = $connect -> query($sql);

                                            if($result){
                                                $count = $result -> num_rows;

                                                if($count > 0){
                                                    for($i=1; $i<=$count; $i++){
                                                        $info = $result -> fetch_array(MYSQLI_ASSOC);
                                                        echo "<tr>";
                                                        echo "<td>".$info['myBoardID']."</td>";
                                                        echo "<td><a href='boardView.php?boardID={$info['myBoardID']}'>".$info['boardTitle']."</a></td>";
                                                        echo "<td>".$info['youName']."</td>";
                                                        echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                                                        echo "<td>".$info['boardView']."</td>";
                                                       // echo "<td><button class='unlike'><i class='far fa-heart'></i></button></td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="board-page">
                                <ul>
                                    <!-- <li><a href="#">처음으로</a></li>
                                    <li><a href="#">이전</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">다음</a></li>
                                    <li><a href="#">마지막으로</a></li> -->
                                    <?php
                                        $sql = "SELECT count(myBoardID) FROM myBoard";
                                        $result = $connect -> query($sql);

                                        $boardTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
                                        $boardTotalCount = $boardTotalCount['count(myBoardID)'];
                                        
                                        //echo "전체 갯수 : " .$boardTotalCount;

                                        //총 페이지 수
                                        $boardTotalPage = ceil($boardTotalCount/$numView);

                                        //echo "총 페이지 수 : " .$boardTotalPage;

                                        //1 2 3 4 5 6 7 8 9 10 11
                                        //현재 페이지를 기준으로 보여주고 싶은 갯수
                                        $pageView = 3;
                                        $startPage = $page - $pageView;
                                        $endPage = $page + $pageView;

                                        //처음 페이지 초기화
                                        if($startPage < 1) $startPage = 1;

                                        //마지막 페이지 초기화
                                        if($endPage >= $boardTotalPage) $endPage = $boardTotalPage;

                                        //처음으로
                                        if($page != 1){
                                            echo "<li><a href='board.php?page=1'>처음으로</a></li>";
                                        }
                                        //이전 페이지
                                        if($page != 1){
                                            $prevPage = $page - 1;
                                            echo "<li><a href='board.php?page={$prevPage}'>이전</a></li>";
                                        }

                                        for( $i=$startPage; $i<=$endPage; $i++ ){
                                            $active = "";
                                            if($i == $page) $active = "active";
                                            
                                            echo "<li class='{$active}'><a href='board.php?page={$i}'>{$i}</a></li>";
                                        }

                                        //다음 페이지
                                        if($page != $endPage){
                                            $nextPage = $page + 1;
                                            echo "<li><a href='board.php?page={$nextPage}'>다음</a></li>";
                                        }

                                        //마지막으로
                                        if($page != $endPage){
                                            echo "<li><a href='board.php?page={$boardTotalPage}'>마지막으로</a></li>";
                                        }
                                    ?>
                                </ul>
                                <button class="write"><a href="boardWrite.php">글쓰기</a></button>
                            </div>
                        </div>

                    </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(".unlike i").on("click", function(){
        $(this).toggleClass("fas")
    });
</script>
</div>

</body>
</html>