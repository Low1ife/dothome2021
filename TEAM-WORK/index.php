<?php
    $title = "굿밤";
    include "goodnight/include/head.php";
?>
<body>
    <div id="wrap">
        <?php
            include "goodnight/include/header.php";
        ?>
        <main>
            <div class="bg">
                <p class="question">당신이 생각하는 밤은 어떤 <em>밤</em>인가요?
                    <span class="scroll">
                        <a href="#">scroll</a>
                        <i class="fas fa-sort-down"></i>
                    </span>
                </p>
                <!-- <button id="sound"> -->
                <i class="far fa-volume"></i>
                <!-- </button> -->
            </div>

            <div class="content1">
                <div class="card_wrap">
                    <div class="card">
                        <div class="image">
                            <img src="/goodnight/asset/img/gn.png" alt="#">
                        </div>
                        <div class="text right">
                            <h2>당신의 수면을 책임지는 굿밤</h2>
                            <p>‘굿밤’은 수면에 어려움을 겪거나 평소 심신이 불안정한 여러분께<br>
                                편안한 밤을 제공해드릴게요. 같은 불면증이라도 각자의 상황이나<br>
                                문제가 다르기 때문에 여러분 개인이 선호하는 소리를 제공하고<br>
                                더 나은 내일을 준비할 수 있도록 하고자 합니다.</p>
                            <button class="more_btn right"><a href="#">게시판 가기</a></button>
                            <button class="more_btn right more"><a href="#">자세히 보기</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="text left">
                            <h2>편한 수면을 통한 일상의 개선</h2>
                            <p>충분한 수면은 신체회복 에너지 보존과 멜라토닌 성장 호르몬 등<br>
                                일상생활을 유지하기 위해 반드시 필요한 부분이에요. 수면이 부족한 경우<br>
                                찾아오는 피로감, 집중력 감소, 소화불량 등의 불편함을<br>
                                ‘굿밤’이 해결 해드릴게요.</p>
                            <button class="more_btn left"><a href="#">사운드 듣기</a></button>
                            <button class="more_btn left more"><a href="#">자세히 보기</a></button>
                        </div>
                        <div class="image">
                            <img src="/goodnight/asset/img/gn2.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //content1 -->

            <div class="sub_text_bg">
                <div class="sub_text">
                    <p>우리는 하루의 일과를 마치면 피로를 회복하고 더 좋은 내일을 보내기 위해 잠이듭니다.<br>하지만 생각보다 많은 사람들이 잠에 대해서 어려움을 겪고 있습니다.</p>
                </div>
            </div>
            <!-- //sub_text -->

            <div class="content2">
                <div class="play_list_wrap">
                    <h2>오늘의 추천 음악 <i class="fas fa-chevron-right"></i></h2>
                    <ul class="play_list">
                        <li class="list_item">
                            <div class="image_area">
                                <a href="#" class="link">
                                    <img src="/goodnight/asset/img/music01.jpeg" alt="#">
                                </a>
                            </div>
                            <div class="text_area">
                                <a href="#" class="title">
                                    <span class="text">밤이 머무는 곳에</span>
                                </a>
                                <div class="artist">
                                    <span class="name">김달래</span>
                                </div>
                            </div>
                        </li>
                        <li class="list_item">
                            <div class="image_area">
                                <a href="#" class="link">
                                    <img src="/goodnight/asset/img/music02.jpeg" alt="#">
                                </a>
                            </div>
                            <div class="text_area">
                                <a href="#" class="title">
                                    <span class="text">밤이 머무는 곳에</span>
                                </a>
                                <div class="artist">
                                    <span class="name">정초코</span>
                                </div>
                            </div>
                        </li>
                        <li class="list_item">
                            <div class="image_area">
                                <a href="#" class="link">
                                    <img src="/goodnight/asset/img/music03.jpeg" alt="#">
                                </a>
                            </div>
                            <div class="text_area">
                                <a href="#" class="title">
                                    <span class="text">해바라기</span>
                                </a>
                                <div class="artist">
                                    <span class="name">장몽이</span>
                                </div>
                            </div>
                        </li>
                        <li class="list_item">
                            <div class="image_area">
                                <a href="#" class="link">
                                    <img src="/goodnight/asset/img/music04.jpeg" alt="#">
                                </a>
                            </div>
                            <div class="text_area">
                                <a href="#" class="title">
                                    <span class="text">밤이 머무는 곳에</span>
                                </a>
                                <div class="artist">
                                    <span class="name">조바둑</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //content2 -->
        </main>

        <div class="sub_text_bg">
                <div class="sub_text">
                    <p></p>
                </div>
            </div>

        <footer>
            <div class="footer_wrap">
                <img src="/goodnight/asset/img/로고@3x.svg" alt="logo">
                <p>굿밤을 이용해 보세요</p>
                <div class="login"><a href="http://goodnight.dothome.co.kr/goodnight/login/login.php">로그인하기</a></div>
            </div>
        </footer>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(".scroll a").click(function(e){
            e.preventDefault();

            let section = $(".content1");
            let offset = section.offset().top;
            $("html,body").animate({
                scrollTop: offset
            }, 600)
        });
    </script>
</body>
</html>