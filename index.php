<?php
session_start();

// $s_id=$_SESSION["s_id"];
//$s_id=isset(조건)? A : B 
$s_id=isset($_SESSION["s_id"])? $_SESSION["s_id"] : "";  
//$s_name=$_SESSION["s_name"];
$s_name=isset($_SESSION["s_name"])? $_SESSION["s_name"] : ""; 
//echo "Session ID : ".$s_id."/ name: ".$s_name;

?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <!-- bxslider css 파일 -->
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- 제이쿼리 파일-->
  <script src="js/jquery.bxslider.js"></script> <!-- bxslider js 파일 -->
  <script type="text/javascript" src="./js/main.js"></script>
  <title>맥도날드</title>
  <style>
    /* 맥딜리버리 */
    .mcdel {
      top: 675px;
    }

    /* 배너 */
    .index_banner {
      width: 1800px;
      margin: auto;
      left: 50%;
      margin: 0 0 20px -900px;
      position: relative;
    }

    .banner01 {
      width: 1800px;
      height: 514px;
      /* background: url(./images/banner1.jpg) center; */
      text-indent: -9999px;
      display: block;
      /* overflow: hidden; */
      position: absolute;
    }

    .banner02 {
      width: 1800px;
      height: 514px;
      /* background-image: url(./images/banner2.jpg) center; */
      text-indent: -9999px;
      display: block;
    }

    .banner03 {
      width: 1800px;
      height: 514px;
      /* background-image: url(./images/banner3.jpg) center; */
      text-indent: -9999px;
      display: block;
    }

    .banner_before {
      width: 142px;
      height: 142px;
      background: url(./images/banner_arrow1.png) no-repeat;
      text-indent: -9999px;
      display: block;
      position: absolute;
      left: 100px;
      top: 215px;
      opacity: 0.8;
      cursor: pointer;
    }

    .banner_after {
      width: 142px;
      height: 142px;
      background: url(./images/banner_arrow2.png) no-repeat;
      text-indent: -9999px;
      display: block;
      position: absolute;
      right: 100px;
      top: 215px;
      opacity: 0.8;
      cursor: pointer;
    }


    .mclunch {
      width: 1179px;
      height: 471px;
      margin: 0 auto 10px;
      /* position: relative;
      z-index: -1; */
    }

    .flo3 {
      width: 1200px;
      height: 613px;
      margin: 0 auto 90px;
    }

    .newmenu {
      width: 581px;
      height: 612px;
      margin: 2px 10px 90px 10px;
      float: left;
      position: relative;
    }

    .newmenu_cont1 {
      width: 192px;
      height: 102px;
      background: url(./images/newmenu01.jpg);
      padding-right: 1px;
      text-indent: -9999px;
      float: left;
      cursor: pointer;
    }



    .newmenu_cont2 {
      width: 192px;
      height: 102px;
      background: url(./images/newmenu02.jpg);
      padding-right: 1px;
      text-indent: -9999px;
      float: left;
      cursor: pointer;
    }

    .newmenu_cont3 {
      width: 193px;
      height: 102px;
      background: url(./images/newmenu03.jpg);
      text-indent: -9999px;
      float: left;
      cursor: pointer;
    }

    .newmenu_img1 {
      position: absolute;
      top: 102px;
      left: 0;
    }

    .newmenu_img2 {
      position: absolute;
      top: 102px;
      left: 0;
      z-index: -1;
    }

    /* 
    .newmenu_cont2:hover .newmenu_img2 {
      position: absolute;
      z-index: 1px;
    } */

    .newmenu_img3 {
      position: absolute;
      top: 102px;
      left: 0;
    }

    .mccafe {
      width: 578px;
      height: 613px;
      float: right;

      margin: 0 10px 90px 0;
    }

    .promo {
      width: 1200px;
      height: 369px;
      margin: auto;
      margin-bottom: 65px;
      overflow: hidden;
      /* margin-left: 0; */
      position: absolute;
      left: 50%;
      margin-left: -590px;
      /*margin-right: 50%;
      right: 600px; */
    }

    .promo h2 {
      font-size: 24px;
      font-weight: bold;
      width: 193px;
      margin: 0 auto 32px;
      clear: both;
    }

    .promo_img {
      height: 300px;
      width: 1180px;
      margin: 0 auto;
    }

    .promo li {
      width: 380px;
      float: left;
    }

    .promo li:first-child,
    .promo li:nth-child(2) {
      margin-right: 15px;
    }

    .search {
      width: 1200px;
      margin: auto;
      height: 348px;
      position: relative;
      clear: both;
      margin-top: 540px;
    }

    .mcsearch {
      width: 800px;
      height: 314px;
      /* margin: 0 0 0 300px; */
      float: left;

    }

    .mcsearch h2 {
      width: 342px;
      height: 73px;
      background: url(./images/mcsearch.jpg) no-repeat;
      text-indent: -9999px;
      margin: 0 auto 0;
    }

    .mcsearch p {
      display: none;
    }

    .mcsearch01 {
      float: left;
      margin: 77px 40px 25px 80px;
    }

    .mcsearch02 {
      float: left;
      margin: 77px 40px 25px 0;
    }

    .mcsearch03 {
      float: left;
      margin: 77px 40px 25px 0;
    }

    .mcsearch04 {
      float: left;
      margin: 77px 40px 25px 0;
    }

    .mcsearch05 {
      float: left;
      margin: 77px 40px 25px 0;
    }

    .mcsearch06 {
      float: left;
      margin: 77px 0px 25px 0;
    }

    .bar {
      width: 2px;
      height: 314px;
      background: #555;
      position: absolute;
      top: -20px;
      left: 800px;
      bottom: 0;
      /* margin: 0 0 0 60px; */
    }

    .mcsns {
      width: 400px;
      height: 314px;
      float: left;

    }

    .mcsns p {
      width: 312px;
      height: 23px;
      background: url(./images/mcSns.jpg);
      text-indent: -9999px;
      margin: 50px auto 50px;

    }

    .ut {
      width: 50px;
      height: 50px;
      float: left;
      margin: 0 20px 0 65px;
    }

    .fb {
      width: 50px;
      height: 51px;
      float: left;
      margin: 0 20px 0 0;
    }

    .tw {
      width: 50px;
      height: 51px;
      float: left;
      margin: 0 20px 0 0;
    }

    .ins {
      width: 50px;
      height: 50px;
      float: left;
      margin: 0 20px 0 0;
    }
  </style>
  
</head>

<body>
  <header>
    <div class="header_inner">
      <a href="./index.html">
        <h1 class="logo"> 맥도날드</h1>
      </a>
      <nav>
        <ul class="main_menu">
          <li class="main_menu_01">
            <a href="">MENU</a>
            <ul>
              <li><a href="./burger.html">버거</a> </li>
              <li><a href="./mclunch.html">맥런치</a> </li>
              <li><a href="./mcmorning.html">맥모닝</a></li>
              <li><a href="./happysnack.html">해피스낵</a></li>
              <li><a href="./side_dst.html">사이드 & 디저트</a></li>
              <li><a href="./mccafe.html">맥카페 & 음료</a></li>
              <li><a href="./happymeal.html">해피밀</a></li>
            </ul>
          </li>
          <li class="main_menu_02">
            <a href="">STORE</a>
            <ul>
              <li><a href="./map.html">매장찾기</a></li>
              <li><a href="./mcdel.html">맥딜리버리</a></li>
              <li><a href="./mcdrive.html">맥드라이브</a></li>
            </ul>

          </li>
          <li class="main_menu_03">
            <a href="">WHAT'S NEW</a>
            <ul>
              <li><a href="./promo.html">프로모션</a></li>
              <li><a href="./news.html">새로운소식</a></li>
              <li><a href="./new_hpmeal">이달의 해피밀</a></li>
            </ul>
          </li>

          <li class="main_menu_04">
            <a href="">STORY</a>
            <ul>
              <li><a href="./brand.html">브랜드 소개</a></li>
              <li><a href="./social.html">사회적 책임과 지원</a></li>
              <li><a href="./competi.html">맥도날드 경쟁력</a></li>
              <li><a href="./human.html">맥도날드 사람들</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <ul class="side_menu">
        <!-- <?php if(!$s_id){   // 로그인전 ?>

        <p class=log>
          <a href="./login/login.php">로그인</a>
          <a href="./members/join.php">회원가입</a>
        </p>
        <?php }else{ // 로그인 후 ?>
        <p>"<?php echo $s_name; ?>"님 안녕하세요.</p>
        <p>
          <?php if($s_id == "admin"){  //관리자 로그인  ?>
          <a href="admin/admin.php">관리자</a>
          <?php }  ?>
          <a href="./login/logout.php">로그아웃</a>
          <a href="./members/edit.php">정보수정</a>
        </p>

        <?php };?> -->






        <li><a href="./login/login.php">로그인</a></li>
        <li><a href="./members/join.php">회원가입</a></li>
      </ul>
    </div>
    <div class="gnb_bg"></div>

  </header>


  <main id="main" class="main">
    <div class="nothing"></div>
    <section class="index_banner">
      <div class="banner_box">
        <h2 class="hide">새로운 소식</h2>
        <ul class="slider">
          <li class="banner01"><a href=""><img src="./images/banner1.jpg" alt=""> 올해도 여름엔 맥윙!</a></li>
          <li class="banner02"><a href=""><img src="./images/banner2.jpg" alt=""> 어니언을 더한 슈니언버거, 상하이 어니언 버거!</a></li>
          <li class="banner03"><a href=""><img src="./images/banner3.jpg" alt=""> 기분전환엔 상큼한 칠러! 애플망고칠러, 제주한라봉칠러</a></li>

        </ul>

        <div class="banner_before" id="slider-next">앞으로</div>

        <div class="banner_after" id="slider-prev">뒤로</div>
      </div>
    </section>

    <section>
      <h3 class="hide">맥딜리버리 주문하러 가기</h3>
      <a href="./mcdel.html" class="mcdel"><img src="./images/mcdel.jpg" alt="맥딜리버리"></a>
    </section>

    <section class="mclunch">
      <h2 class="hide">맥런치소개</h2>
      <a href="#"><img src="./images/맥런치.jpg" alt="맥런치소개"></a>
    </section>
    <div class="flo3">
      <section class="newmenu">
        <h2 class="hide">신메뉴</h2>

        <ul class="newmenu_list">
          <!-- 바닐라스크립트로 했을때 onclick 부여
           <li class="newmenu_cont1" onclick="changeImg('./images/newmenu11.jpg')">상큼한 한라봉칠러</li>
          <li class="newmenu_cont2" onclick="changeImg('./images/newmenu22.jpg')">달콤한 맥플러리</li>
          <li class="newmenu_cont3" onclick="changeImg('./images/newmenu33.jpg')">New 창녕갈릭버거</li> -->

          <!-- 제이쿼리로 진행 -->
          <li class="newmenu_cont1">상큼한 한라봉칠러</li>
          <li class="newmenu_cont2">달콤한 맥플러리</li>
          <li class="newmenu_cont3">New 창녕갈릭버거</li>
        </ul>
        <ul class="newmenu_tabs">
          <li class="newmenu_img1"><a href="#"><img src="./images/newmenu11.jpg" alt="한라봉칠러" id="big_img"></a></li>
          <li class="newmenu_img2"><a href="#"><img src="./images/newmenu22.jpg" alt="맥플러리"></a></li>
          <li class="newmenu_img3"><a href="#"><img src="./images/newmenu33.jpg" alt="창녕갈릭버거"></a></li>
        </ul>

      </section>
      <div class="mccafe">
        <a href=""><img src="./images/mccafe.jpg" alt="맥카페"></a>
      </div>
    </div>
    <section class="promo">
      <h2>이달의 프로모션</h2>
      <ul class="promo_img">
        <li><a href="#"><img src="./images/promo01.jpg" alt="콜라보굿즈출시"></a></li>
        <li><a href="#"><img src="./images/promo02.jpg" alt="해피밀"></a></li>
        <li><a href="#"><img src="./images/promo03.jpg" alt="쿨러백"></a></li>
      </ul>
    </section>
    <section class="search">
      <div class="mcsearch">
        <h2>매장검색</h2>
        <p>맥도날드를 더 다양한 방법으로!</p>
        <ul>
          <li class="mcsearch01"><a href="./map.html"><img src="./images/매장검색_mcmor.jpg" alt="맥모닝"></a></li>
          <li class="mcsearch02"><a href="./map.html"><img src="./images/매장검색_mcdel.jpg" alt="맥딜리버리"></a></li>
          <li class="mcsearch03"><a href="./map.html"><img src="./images/매장검색_drive.jpg" alt="맥드라이브"></a></li>
          <li class="mcsearch04"><a href="./map.html"><img src="./images/매장검색_24hours.jpg" alt="24시간"></a></li>
          <li class="mcsearch05"><a href="./map.html"><img src="./images/매장검색_decafe.jpg" alt="디카페인커피"></a></li>
          <li class="mcsearch06"><a href="./map.html"><img src="./images/매장검색_parking.jpg" alt="주차"></a></li>
        </ul>
      </div>
      <div class="bar"></div>
      <div class="mcsns">
        <h2 class="hide">SNS</h2>
        <p>맥도날드 소식이 궁금하다면?</p>
        <ul>
          <li class="ut"><a href=""><img src="./images/low01.jpg" alt="유투브"></a></li>
          <li class="fb"><a href=""><img src="./images/low02.jpg" alt="페이스북"></a></li>
          <li class="tw"><a href=""><img src="./images/low03.jpg" alt="트위터"></a></li>
          <li class="ins"><a href=""><img src="./images/low04.jpg" alt="인스타그램"></a></li>
        </ul>
      </div>
    </section>

    <div class="top"><a href=""><img src="./images/top.jpg" alt="위로 올라가기"></a></div>
  </main>

  <footer id="footer" class="footer">
    <div class="footer_box">
      <h2>사이트 이용안내</h2>
      <ul class="footer_cont1">
        <li>한국맥도날드(유)</li>
        <li>대표이사 : 앤토니 마티네즈</li>
        <li>사업자등록번호 : 123-45-67890</li>
        <li>전화주문 : 1600-5252</li>
      </ul>
      <ul class="footer_cont2">
        <li>개인정보 처리방침</li>
        <li>위치정보 이용약관</li>
        <li>사이트맵</li>
        <li>임차문의</li>
        <li>고객문의</li>
        <li>인재채용</li>
      </ul>
      <a href=""><img src="./images/웹접근성.jpg" alt="웹접근성"></a>
    </div>
  </footer>

</body>


</html>