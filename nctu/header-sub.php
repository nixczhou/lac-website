<html>
<head>
	<title><?php echo get_the_title(); ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<script>
// ===== Scroll to Top ====
                $(window).scroll(function() {
                        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                                 $('#return-to-top').fadeIn(200);    // Fade in the arrow
                                 } else {
                                 $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                                 }
                        });

                $('#return-to-top').click(function() {      // When arrow is clicked
                        $('html,body').animate({scrollTop:0}, 500);
                    });

                        $('#comment_btn_submit').click(function(){
                           alert('Please wait while form is submitting');
                           $('#commentform').submit();
                           });




(function ($) {
 $.fn.drawWaves = function (options) {
 const settings = $.extend({
                           container: options.container ? options.container : 'body',
                           color: '#E6E6E6',
                           height: 200,
                           waveDelta: 100,
                           wavePoints: 3,
                           speed: .15
                           }, options);
 
 const wave = this;
 let width = $(settings.container).width();
 let height = $(settings.container).height();
 let points = [];
 let lastUpdate;
 let totalTime = 0;
 
 TweenMax.set(wave, {attr: {fill: settings.color}});
 
 function drawPoints(factor) {
 const points = [];
 
 for (let i = 0; i <= settings.wavePoints; i++) {
 const x = i / settings.wavePoints * width;
 const sinSeed = (factor + (i + i % settings.wavePoints)) * settings.speed * 100;
 const sinHeight = Math.sin(sinSeed / 100) * settings.waveDelta;
 const yPos = Math.sin(sinSeed / 100) * sinHeight + settings.height;
 points.push({x: x, y: yPos});
 }
 
 return points;
 }
 
 function drawPath(points) {
 let SVGString = 'M ' + points[0].x + ' ' + points[0].y;
 
 const cp0 = {
 x: (points[1].x - points[0].x) / 2,
 y: (points[1].y - points[0].y) + points[0].y + (points[1].y - points[0].y)
 };
 
 SVGString += ' C ' + cp0.x + ' ' + cp0.y + ' ' + cp0.x + ' ' + cp0.y + ' ' + points[1].x + ' ' + points[1].y;
 
 let prevCp = cp0;
 let inverted = -1;
 
 for (let i = 1; i < points.length - 1; i++) {
 const cpLength = Math.sqrt(prevCp.x * prevCp.x + prevCp.y * prevCp.y);
 const cp1 = {
 x: (points[i].x - prevCp.x) + points[i].x,
 y: (points[i].y - prevCp.y) + points[i].y
 };
 
 SVGString += ' C ' + cp1.x + ' ' + cp1.y + ' ' + cp1.x + ' ' + cp1.y + ' ' + points[i + 1].x + ' ' + points[i + 1].y;
 prevCp = cp1;
 inverted = -inverted;
 }
 
 SVGString += ' L ' + width + ' ' + height;
 SVGString += ' L 0 ' + height + ' Z';
 return SVGString;
 }
 
 function draw() {
 const now = window.Date.now();
 
 if (lastUpdate) {
 const elapsed = (now - lastUpdate) / 1000;
 lastUpdate = now;
 
 totalTime += elapsed;
 
 const factor = totalTime * Math.PI;
 TweenMax.to(wave, settings.speed, {
             attr: {
             d: drawPath(drawPoints(factor))
             },
             ease: Power1.easeInOut
             });
 } else {
 lastUpdate = now;
 }
 
 requestAnimationFrame(draw);
 }
 
 function debounce(func, wait, immediate) {
 let timeout;
 return function () {
 const context = this, args = arguments;
 clearTimeout(timeout);
 timeout = setTimeout(function () {
                      timeout = null;
                      if (!immediate) func.apply(context, args);
                      }, wait);
 if (immediate && !timeout) func.apply(context, args);
 };
 }
 
 const redraw = debounce(function () {
                         wave.attr('d', '');
                         points = [];
                         totalTime = 0;
                         width = $(settings.container).width();
                         height = $(settings.container).height();
                         lastUpdate = false;
                         setTimeout(function () {
                                    draw();
                                    }, 50);
                         }, 250);
 $(window).on('resize', redraw);
 
 return draw();
 };
 }(jQuery));


jQuery(function($){
       $('#divSvg3').drawWaves({
                               speed: .15,
                               color: "#E6E6E6",
                               height: 45,
                               waveDelta: 20,
                               wavePoints: 7
                               });
       
       });


</script>

<style>

svg { position:absolute; top:0; left:0}

#flipUpsideDown{
    width: 100%;
    height: 200px;
    position: relative;
}

#intro3{
    position: relative;
    transform: rotate(180deg);
}
</style>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>

<!-- Return to Top Button -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

<ul class="homepage-navbar">
        
    <li class="navbar-list-logo"><a style = "width:100%; padding:0; visibility: visible;" href="https://inspir.nctu.edu.tw/"><img id="logo" style = "width:100%;" src="https://inspir.nctu.edu.tw/wp-content/themes/inspir/nctu/images/icons/LOGO.png" alt=""></div></a></li>

    <li class="navbar-list-hamburger" style="float:right; padding: 14px 16px;"><img class="hamburger" src="https://inspir.nctu.edu.tw/wp-content/themes/inspir/nctu/images/icons/漢堡條.png" alt=""></li>

    <li class="navbar-list" style="float:right"><a href="https://www.facebook.com/NCTUinspir/" target="_blank">臉書粉專</a></li>
    <li class="navbar-list" style="float:right"><a href="https://cge.nctu.edu.tw/" target="_blank">通識中心</a></li>
    <li class="navbar-list" style="float:right"><a href="https://www.nctu.edu.tw" target="_blank">交大首頁</a></li>
</ul>

<div class="nav-map close-map">
    <ul class="subpage-navbar-mobile">

        <li class="subnav-list-mobile-1"><a href="https://inspir.nctu.edu.tw/創意起源/">創意起源</a></li>
        <li class="subnav-list-mobile-2"><a href="https://inspir.nctu.edu.tw/新聞中心/">新聞中心</a></li>
        <li class="subnav-list-mobile-1"><a href="https://inspir.nctu.edu.tw/實驗刊物/">實驗刊物</a></li>
        <li class="subnav-list-mobile-2"><a href="https://cge.nctu.edu.tw/tw/about/index.php?main_kind=30&kind=31" target="_blank">創意拓荒</a></li>
        <li class="subnav-list-mobile-1"><a href="https://cge.nctu.edu.tw/tw/works/index.php" target="_blank">實驗競技場</a></li>
        <li class="subnav-list-mobile-2"><a href="https://inspir.nctu.edu.tw/實驗室總部/">實驗室總部</a></li>
        <li class="subnav-list-mobile-1"><a href="https://inspir.nctu.edu.tw/快速通道/">快速通道</a></li>
        <li class="subnav-list-mobile-2"><a href="https://inspir.nctu.edu.tw/便利商店/">便利商店</a></li>

    </ul>
</div>

<div id="flipUpsideDown">
    <svg width="100%" height="100%" version="1.1" id="intro3">
        <path id="divSvg3" d=""></path>
    </svg>
</div>


<div class="subnav-block" id="navnav">

    <ul class="subpage-navbar" style="margin-top: 2%;">

        <li class="subnav-list"><a href="https://inspir.nctu.edu.tw/創意起源/">創意起源</a></li>
        <li class="subnav-list"><a href="https://inspir.nctu.edu.tw/新聞中心/">新聞中心</a></li>
        <li class="subnav-list"><a href="https://inspir.nctu.edu.tw/實驗刊物/">實驗刊物</a></li>
        <li class="subnav-list"><a href="https://cge.nctu.edu.tw/tw/about/index.php?main_kind=30&kind=31" target="_blank">創意拓荒</a></li>
        <li class="subnav-list"><a href="https://cge.nctu.edu.tw/tw/works/index.php" target="_blank">實驗競技場</a></li>
        <li class="subnav-list"><a href="https://inspir.nctu.edu.tw/實驗室總部/">實驗室總部</a></li>
        <li class="subnav-list"><a href="https://inspir.nctu.edu.tw/快速通道/">快速通道</a></li>
        <li class="subnav-list"><a href="https://inspir.nctu.edu.tw/便利商店/">便利商店</a></li>

    </ul>

</div>
