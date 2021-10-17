<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>

    <!-- style -->
    <link rel="stylesheet" href="../asset/css/fonts.css">
    <link rel="stylesheet" href="../asset/css/var.css">
    <link rel="stylesheet" href="../asset/css/reset.css">
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
        <header id="header">
            <?php
                include "../include/header.php"
            ?>
        </header>
        <!-- //header -->
        <!-- //header -->

    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <section class="content-article">            
                <section class="cardType">
                            <div class="cardType01">
                                <h2>INDECISIVE</h2>
                                <p>결정하는데 있어서 항상 어려움을 느끼는 분들을 위한 사이트 입니다.</p>
                                <div class="card-wrap">
                                    <div class="card">
                                        <a href="#"> 
                                            <img src="../asset/img/card01.jpg" alt="사이트 만들기 관련 이미지입니다." class="card-img">
                                            <strong class="card-title">오늘 뭐 먹지?</strong>
                                            <span class="card-desc">먹는거 하나도 제대로 못고르는 당신을 위한 사이트 입니다.</span>
                                            <span class="card-keyword">
                                                <span>#음식</span>
                                                <span>#추천</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="card">
                                    <a href="#">
                                        <img src="../asset/img/card02.jpg" alt="사이트 만들기 관련 이미지입니다." class="card-img">
                                        <strong class="card-title">오늘 뭐 하지?</strong>
                                        <span class="card-desc">당신처럼 할거 없는 사람들과 시간을 보내 보세요. 당신처럼 할거 없는 사람들과 시간을 보내 보세요.</span>
                                        <span class="card-keyword">
                                            <span>#오늘</span>
                                            <span>#뭐 하지</span> 
                                        </span>
                                        </a>
                                    </div>
                                    <div class="card">
                                    <a href="#">
                                        <img src="../asset/img/card03.jpg" alt="사이트 만들기 관련 이미지입니다." class="card-img">
                                        <strong class="card-title">오늘 뭐 입지?</strong>
                                        <span class="card-desc">옷 조차 못 고르는 당신을 위한 사이트 입니다.</span>
                                        <span class="card-keyword">
                                            <span>#오늘</span>
                                            <span>#뭐 입지</span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                </section>
        </section>
            <article class="flow-article">
                <h3 class="ir_so">신청하기</h3>
                <section id="comment" class="section-comment">
                    <h4>사람들과 놀러가기</h4>
                    <p>심심하신 분들은 댓글로 사람들을 만나보세요.</p>
                    <div class="comment-form">
                        <form action="commentSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                                    <div class="comment-wrap">
                                        <div>
                                            <label for="youName" class="ir_so">이름</label>
                                            <input type="text" name="youName" id="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength="10" required>
                                        </div>
                                        <div>
                                            <label for="바로가기" class="ir_so">바로가기</label>
                                            <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="댓글" autocomplete="off" required>
                                        </div>
                                        <button class="btn_submit2" type="submit" value="바로가기">go</button>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 10";
                            $result = $connect -> query($sql);


                            // echo "<pre>";
                            // var_dump ( mysqli_fetch_array($result) );
                            // echo "</pre>";


                            while( $info = mysqli_fetch_array($result) ){
                        ?>        
                                <div>
                                    <p><?=$info['youText']?></p>
                                    <div>
                                        <img src="http://kws7902.dothome.co.kr/class/img/img09.jpg" alt="">
                                        <span><?=$info['youName']?></span>
                                        <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                    </div>
                                </div>
                        <?php        
                            }
                        ?>


                        <!-- <div>
                            <p>점심 골라주세요,,,!! 점심 골라주세요,,,!! 점심 골라주세요,,,!! 점심 골라주세요,,,!!</p>
                            <div>
                                <img src="http://kws7902.dothome.co.kr/class/img/img09.jpg" alt="">
                                <span>김민수</span>
                                <span>2020-10-10</span>
                            </div>
                        </div> -->
                    </div>
                </section>
            </article>
        </section>            
    </main>
    <!-- //contents -->

    <footer id="footer">
        footer
    </footer>
    <!-- //footer -->
    
</body>
</html>