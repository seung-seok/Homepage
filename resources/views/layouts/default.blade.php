<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 브라우저 호환성을 지정 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 제목을 지정 -->
    <meta http-equiv="Title" content="라라벨로 만드는 웹페이지">
    <!-- 홈페이지 주제를 지정 -->
    <meta http-equiv="Subject" content="라라벨로 만드는 웹페이지">
    <!-- <meta http-equiv="Page-Enter" content="revealtrans(Duration=1,Transition=12)" /> -->
    <meta http-equiv="Page-Enter" content="blendtrans(Duration=1,Transition=24)" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/fav.png">
    <!-- CSS 연동 -->
    <link rel="stylesheet" href="asset/default/style.css">
    <link rel="stylesheet" href="asset/default/nav.css">
    <link rel="stylesheet" href="asset/default/main.css">

    <!-- JS 연동 -->
    <script src="asset/default/script.js"></script>
    <title>@yield('title','')</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Neonderthaw&family=Noto+Sans+KR:wght@100&family=Poiret+One&family=Secular+One&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->
    <div class="nav">
        <ul class="nav_left">
            <li class="nav_left_items">iamseung_</li>
            <!-- <li class="nav_left_items"><img src="/img/Slogo.png" alt=""></li> -->
        </ul>
        <ul class="nav_right">
            <li class="nav_right_items">Main</li>
            <li class="nav_right_items">Intro</li>
            <li class="nav_right_items">Portfolio</li>
            <li class="nav_right_items">Contact</li>
        </ul>
    </div>
    <!-- main -->
    <div class="main">
        <div class="main_left_20">
            <div class="profile">
                <div class="main_img_box">
                    <img class="main_img" src="/img/if.png" alt="" width="320" height="240">
                </div>
                <div class="title_text_name">iamseung_</div>
                <div class="title_text_explain"># Developer<br># BE</div>
            </div>
        </div>
        <div class="main_right_80">
            <div class="title_text">
                <h2 class="">Hello,I am seungseok!</h2>
                <h3 class="dd">PHP</h3>
            </div>
        </div>
    </div>
    <div class="dd" style="background-color: black; height: 1000px">d</div>

</body>
</html>