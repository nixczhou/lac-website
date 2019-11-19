<html>
<head>
	<title>創意實驗室</title>

	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




<script>
// ===== Scroll to Top ====
$(window).scroll(function() {
                 if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                 $('#return-to-top').fadeIn(200);    // Fade in the arrow
                 } else {
                 $('#return-to-top').fadeOut(20000);   // Else fade out the arrow
                 }
                 });
$('#return-to-top').click(function() {      // When arrow is clicked
                          $('body,html').animate({
                                                 scrollTop : 0                       // Scroll to top of body
                                                 }, 500);
                          });
</script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>

<!-- Return to Top Button -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

<div class="height65">
<div class="container">
      <div class="row height65">
        <div class="col height65">
          <nav class="navbar navbar-expand-lg main-nav my-md-3">
<a class="navbar-brand black" href="http://52.194.163.46/"><i class="fas fa-shopping-cart mr-2"></i>創意實驗室 Inspiration Lab.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link px-3 black" href="https://cge.nctu.edu.tw/">通識中心</a>
                </li>
                <li class="nav-item">
                  <span>／</span>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-3 black" href="https://www.nctu.edu.tw">交大首頁</a>
                </li>
                </li>
                <li class="nav-item">
                  <span>／</span>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-3 black nav-font" href="https://www.facebook.com/NCTUinspir/">Facebook</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
</div>


<!-- 輪撥區 -->
    <div class="container-fluid">
      <!-- px-0 移除Row和Colums的左右Padding -->
      <div class="row px-0">
        <div class="col px-0">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                <a href ="<?php echo get_page_link(119); ?>">
                <img class="d-block w-100 banner-home" src="https://inspir.nctu.edu.tw/wp-content/uploads/Banner設計-楊F.jpg" alt="First slide">
                </a>
              </div>
              <div class="carousel-item">
                <a href ="<?php echo get_page_link(89); ?>">
                <img class="d-block w-100 banner-home" src="https://inspir.nctu.edu.tw/wp-content/uploads/No2_女兒節_fin.png" alt="Second slide">
                </a>
              </div>
              <div class="carousel-item">
                <a href ="<?php echo get_page_link(473); ?>">
                <img class="d-block w-100 banner-home" src="https://inspir.nctu.edu.tw/wp-content/uploads/banner馬丁路德-e1546429260610.png" alt="Third slide">
                </a>
              </div>
              <div class="carousel-item">
                <a href ="<?php echo get_page_link(119); ?>">
                <img class="d-block w-100 banner-home" src="https://inspir.nctu.edu.tw/wp-content/uploads/04-e1543737653896.jpg" alt="Forth slide">
                </a>
              </div>
              <div class="carousel-item">
                <a href ="<?php echo get_page_link(468); ?>">
                <img class="d-block w-100 banner-home" src="https://inspir.nctu.edu.tw/wp-content/uploads/banner-02-e1540576690743.png" alt="Fifth slide">
                </a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

<div class="bg-gray">
	<div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link white" href="<?php echo site_url('397'); ?>">活動公告<span class="sr-only">(current)</span></a>
                    </li>
		      <li class="nav-item active">
		        <a class="nav-link white" href="http://52.194.163.46/創意起源/">創意起源<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link px-3 white" href="#">新聞中心</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle white" href="http://52.194.163.46/實驗出版/" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          實驗出版
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="http://52.194.163.46/2018/12/26/馬丁路德金恩博士紀念日/">交青快餐車</a>
          <a class="dropdown-item" href="#">故事咖啡廳</a>
		      </li>
          <li class="nav-item active">
            <a class="nav-link px-3 white" href="https://cge.nctu.edu.tw/tw/about/index.php?main_kind=30&kind=31" target="_blank">創意拓荒</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link px-3 white" href="https://cge.nctu.edu.tw/tw/works/index.php" target="_blank">競賽活動</a>
          </li>
		      <li class="nav-item active">
		        <a class="nav-link px-3 white" href="#">實驗室總部</a>
		      </li>
          <li class="nav-item active">
            <a class="nav-link px-3 white" href="#">快速通道</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link px-3 white" href="#">便利商店</a>
          </li>
		    </ul>
		  </div>
		</nav>
        </div>
      </div>
    </div>
</div>


<div class="container-fluid">
