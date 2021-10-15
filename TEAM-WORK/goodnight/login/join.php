<?php
    $title = "굿밤 | 회원가입";
    include "../include/head.php";
?>
<link rel="stylesheet" href="../asset/css/join.css">
<body>
    
    <!-- <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div> -->
    <!-- //skip -->

     <?php
        include "../include/login_header.php";
     ?>
     <!-- header -->


<main id="contents">
    <div class="main_bg">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">회원가입 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <div class="member_wrap">
                        <h3>회원가입</h3>
                        <form name="join" action="joinSave.php" method="POST">
                            <div class="typing">
                                <fieldset>
                                    <legend class="ir_so">회원가입 입력폼</legend>
                                    <div class="member-box">
                                        <div>
                                            <label for="youEmail" class="ir_so">이메일</label>
                                            <input type="email" name="youEmail" id="youEmail" class="input_write" placeholder="이메일 주소" autocmplete="off" autofocus require>
                                        </div>
                                        <div>
                                            <label for="youPass" class="ir_so">비밀번호</label>
                                            <input type="password" name="youPass" id="youPass" class="input_write" maxlength="20" placeholder="비밀번호" autocmplete="off" required>
                                        </div>
                                        <div>
                                            <label for="youPassC" class="ir_so">비밀번호 확인</label>
                                            <input type="password" name="youPassC" id="youPassC" class="input_write" maxlength="20" placeholder="비밀번호 확인" autocmplete="off" required>
                                        </div>
                                        <div>
                                            <label for="youName" class="ir_so">이름</label>
                                            <input type="text" name="youName" id="youName" class="input_write" maxlength="5" placeholder="이름" autocmplete="off" required>
                                        </div>
                                        <div>
                                            <label for="youBirth" class="ir_so">생년월일</label>
                                            <input type="text" name="youBirth" id="youBirth" class="input_write" placeholder="생년월일" autocmplete="off" required>
                                        </div>
                                        <div>
                                            <label for="youPhone" class="ir_so">휴대폰 번호</label>
                                            <input type="text" name="youPhone" id="youPhone" class="input_write" placeholder="휴대폰 번호('-'포함)" autocmplete="off" required>
                                        </div>
                                        <div>
                                        <input type="checkbox" id="check" required>
                                        <label for="check">본인은 14세 이상입니다.</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="info">
                                <button id="joinBtn" class="btn_submit input_write join" type="submit">회원가입 완료</button>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </div>
</main>
<!-- //contents -->

</body>
</html>