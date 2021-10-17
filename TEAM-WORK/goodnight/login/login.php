<?php 
    $title = "굿밤 | 로그인";
    include "../include/head.php";
?>
<link rel="stylesheet" href="../asset/css/login.css">
<body>
    <!-- <div id="skip">
        <a href="#contents">로그인 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div> -->
     
    <?php
        include "../include/login_header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <div class="main_bg">
            <section id="mainCont" class="gray">
                <h2 class="ir_so">로그인 컨텐츠</h2>
                <article class="content-article">
                    <div class="member-form">
                        <div class="member_wrap">
                            <h3>로그인</h3>
                            <form name="login" action="loginSave.php" method="POST">
                                <fieldset>
                                    <legend class="ir_so">로그인 입력폼</legend>
                                    <div class="member-box">
                                        <div class="youEmail login_form">
                                            <label for="youEmail" class="ir_so">이메일 주소</label>
                                            <input type="email" name="youEmail" id="youEmail" class="input_write login_form" placeholder="이메일 주소" autocmplete="off" autofocus required>
                                        </div>
                                        <div class="youPass login_form">
                                            <label for="youPass" class="ir_so">비밀번호</label>
                                            <input type="password" name="youPass" id="youPass" class="input_write login_form" maxlength="20" placeholder="비밀번호" autocmplete="off" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="member">
                                    <button id="loginBtn" class="btn_submit input_write login" type="submit">로그인</button>
                                    <button id="joinBtn" class="btn_submit input_write join" type="button" onclick="location.href='./join.php'">회원가입</button>
                                </div>
                            </form>
                            <div class="info">
                                <p>아직 굿밤 회원이 아니신가요? 지금 <span><a href="join.php">회원가입</a></span>을 눌러 가입하세요.<br>
                                   수면에 어려움을 겪거나 평소 심신이 불안정한 여러분께 굿밤이 편안한 밤을 제공해드릴게요.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>
    <!-- //contents -->
</body>
</html>