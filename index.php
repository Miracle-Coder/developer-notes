<?php
require_once 'include/db/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Developer Notes</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- Carousel -->
    <script type="text/javascript">
        var browser			= navigator.userAgent;
        var browserRegex	= /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
        var isMobile		= false;
        if(browser.match(browserRegex)) {
            isMobile			= true;
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){
                window.scrollTo(0,1);
            }
        }
    </script>
    <link rel="stylesheet" href="libs/slider/css/amazium.css">
    <link rel="stylesheet" href="libs/slider/css/base.css">
    <link rel="stylesheet" href="libs/slider/css/everslider.css">
    <link rel="stylesheet" href="libs/slider/css/everslider-custom.css">
    <link rel="stylesheet" href="libs/slider/css/layout.css">


    <!--- Font Awesome --->
    <link rel="stylesheet" href="css/font awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/font awesome/css/font-awesome.min.css">
    
    <!--- Fonts --->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">


    <!--- Windy --->
    <link rel="stylesheet" href="libs/windy/css/windy.css">

    <!-- arcticModal theme -->
    <link rel="stylesheet" href="libs/arcticmodal/themes/simple.css">
    <link rel="stylesheet" href="libs/arcticmodal/jquery.arcticmodal.css">


</head>

<body>


<!-- Preloader -->
<div id="preloader">
    <div class="load">
        <div class="dot"></div>
        <div class="outline"><span></span></div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal" id="boxUserFirstInfo">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <b>Здравствуй, милый человек!</b><br>
        <br>
        На сайте идет постоянная работа по обновлению и добавлению новых функций, что бы разнообразить Твое времяпровождение здесь и сделать его более приятным.
        <br>
        <br>
        Надеюсь Тебе понравится здесь!
        <br>
        <br>
        Добро пожаловать :)
    </div>
</div>


    <div id="Wrapper">

    <!-- Top Menu -->

        <main id="main-menu">


            <?php include 'include/connection/header_menu.php' ?>


            <!-- Login modal window animation -->


            <?php include 'include/connection/users.php' ?>


        </main>



    <!-- Image Logo -->



        <!-- particles.js container -->
        
        <div id="particles-js"></div>

        <div class="header-img-logo">

            <img class="header-img-logo-top" src="/images/dokkenNelsonLogoDNonly.png">
            <div class="header-img-logo-bottom">Developer Notes</div>
            
        </div>




    <!-- fullwidth slider -->


        <?php include 'include/connection/slider_carousel.php' ?>


            <!-- Content -->

    <div class="blog_content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- Main article -->

                    <?php include 'include/connection/articles.php' ?>

                </div>


                <!-- Right main block -->
                <div class="col-md-4">


                    <!-- Search -->


                    <div class="search">
                        <div class="search-text">
                            <span>Lost Something?</span>
                        </div>
                        <form action="http://developer-notes.h1n.ru/include/connection/search.php" method="GET" id="serach-form">
                            <input class="search-input" name="search" type="search" placeholder="Search" required>
                        </form>
                    </div>




                    <!-- Accordian Categories -->


                    <?php include 'include/connection/accordian_categories.php' ?>




                    <!--We recommend -->



                    <?php include 'include/connection/we_recommend.php' ?>



                    <!-- Comments -->

                    <?php include 'include/connection/new_comments.php' ?>


                    <!-- Windy -->


                    <?php include 'include/connection/top_5_materials.php' ?>


                </div>
            </div>
        </div>
    </div>


        <!-- Footer-->


                <?php include 'include/connection/footer.php' ?>


        <!-- jQuery -->

<script src="js/jquery-3.2.1.min.js"></script>


        <!-- Slider JS -->

<script src="libs/slider/js/jquery.easing.1.3.js" defer></script>
<script src="libs/slider/js/jquery.everslider.js" defer></script>
<script src="libs/slider/js/jquery.mousewheel.js" defer></script>
<script src="libs/slider/js/jquery.scrollUp.min.js" defer></script>
<script src="libs/slider/js/respond.min.js" defer></script>

        <!-- Windy JS -->

<script src="libs/windy/js/modernizr.custom.79639.js" defer></script>
<script src="libs/windy/js/jquery.windy.js" defer></script>

        <!--- Scroll --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.6/SmoothScroll.min.js.map" defer></script>

    <script type="text/javascript" defer>
        $(function(){
            $.scrollUp({animation: 'slide'});
            $('a[href="#"]').click(function(){ return false; });
        });
    </script>


    </div>

<script src="libs/wow-animation/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript" defer>
    $(document).ready(function(){
        $('#image_slider').everslider({
            mode: 'normal',
            moveSlides: 1
        });
    });
</script>


<script src="js/main.js" defer></script>
<script src="jquery.timeago.js" defer></script>
<script src="jquery.timeago.ru.js" defer></script>

        <!-- particles scripts -->

<script src="js/particles.js" defer></script>
<script src="js/app.js" defer></script>


<!-- arcticModal -->
<script src="libs/arcticmodal/jquery.arcticmodal.js" defer></script>

<!-- cookie -->
<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js" defer></script>

<script defer>
    (function($) {
        $(function() {
            // Проверим, есть ли запись в куках о посещении посетителя
            // Если запись есть - ничего не делаем
            if (!$.cookie('was')) {
                // Покажем всплывающее окно
                function getWindow(){
                    $('#boxUserFirstInfo').arcticmodal({
                        closeOnOverlayClick: false,
                        closeOnEsc: true
                    });
                };
                setTimeout (getWindow, 5000);
            }
            // Запомним в куках, что посетитель к нам уже заходил
            $.cookie('was', true, {
                expires: 1,
                path: '/'
            });
        })
    })(jQuery)
</script>


</body>
</html>
