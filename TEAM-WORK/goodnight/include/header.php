<header>
    <div class="container">
        <div class="header">
            <div class="bam">
                <img src="/goodnight/asset/img/로고.svg" alt="밤">
                <h1><a href="http://goodnight.dothome.co.kr">굿밤</a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">수면</a></li>
                    <li><a href="#">수면 데이터</a></li>
                    <li><a href="#">사운드</a></li>
                    <li><a href="/goodnight/board/board.php">커뮤니티</a></li>
                </ul>
            </nav>
            <div class="login">
                <?php
                    if($_SESSION['youName']==""){
                        ?>
                        <a href="/goodnight/login/login.php">로그인</a>
                        <a href="/goodnight/login/join.php">회원가입</a>
                        <?php
                    }else{
                        ?>
                        <a href="#">마이페이지</a>
                        <a href="/goodnight/login/logout.php">로그아웃</a>
                        <?php
                    }
                ?>
                
            </div>
        </div>
    </div>
</header>
<!-- //header -->