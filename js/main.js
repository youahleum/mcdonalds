// 신메뉴 소개 스크립트
    // function changeImg(img_url) {
    //   var big_img = document.getElementById("big_img")
    //   big_img.src = img_url
    // }


$(document).ready(function () {
  // 신메뉴 소개 제이쿼리
  $(".newmenu_list li").click(function () {
    var idx = $(this).index()
    $(".newmenu_tabs li").hide()
    $(".newmenu_tabs li").eq(idx).show()
  });

  //gnb 
  $(".main_menu>li").mouseenter(function () {
    $(".main_menu>li>ul, .gnb_bg").stop().slideDown("fast")
  })
  $(".main_menu>li").mouseleave(function () {
    $(".main_menu>li>ul, .gnb_bg").stop().slideUp("fast")
  });

  //slide
  var slider = $('.slider').bxSlider({
    auto: true, //이미지 회전이 자동으로 시작
    speed: 500, //다음 이미지로 바뀌는데 걸리는 시간
    pause: 4500, //다음 이미지로 바뀌는데 걸리는 시간
    mode: 'horizontal', //수평 스크롤
    autoControls: false, // 시작, 정지버튼 노출 여부 
    controls: false, // prev/next 버튼 노출 여부
    pager: true
    // nextSelector: '#slider-next',
    // prevSelector: '#slider-prev',
  });
  //이전 버튼을 클릭하면 이전 슬라이드로 전환
  $('#slider-prev').on('click', function () {
    slider.goToPrevSlide(); //이전 슬라이드 배너로 이동
    return false; //<a>에 링크 차단
  });

  //다음 버튼을 클릭하면 다음 슬라이드로 전환
  $('#slider-next').on('click', function () {
    slider.goToNextSlide(); //다음 슬라이드 배너로 이동
    return false;
  });




});