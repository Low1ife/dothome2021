<script src="https://kit.fontawesome.com/9a767740aa.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<style>
    header {
        background: block;
        background: transparent ;
    }
    i {
        color: rgba(255,255,255,0.8);
        font-size: 50px;
        margin-top: 40px;
        cursor: pointer;
    }
</style>

<header id="header"> 
    <div class="container">
        <div class="header">
            <div class="bam">
                <i class="fas fa-arrow-left"></i>
            </div>
        </div>
    </div>
</header>

<script>
    $("i").click(function(){
        history.back();
    });
</script>