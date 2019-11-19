<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>實驗動物中心</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
  jQuery(function($){
  // map scroll to item
    $("a[href^='#']").click(function(e) {
        e.preventDefault();
        
        var position = $($(this).attr("href")).offset().top;

        $("body, html").animate({
          scrollTop: position
        } /* speed */ );
    });
  });
</script>

<style>

.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.navbar li {
  float: left;
}

.navbar li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 8px 16px;
  text-decoration: none;
}

.navbar li a:hover, .dropdown:hover .dropbtn {
  background-color: #f9f9f9;
  color: #4169E1;
}

.navbar li.dropdown {
  display: inline-block;
}

.navbar .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.navbar .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.navbar .dropdown-content a:hover {background-color: #f1f1f1;}

.navbar .dropdown:hover .dropdown-content {
  display: block;
}


</style>


<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<!--Basic FontAwesome CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body>

<div class="header">
    <div class="top-header">
        <p style="margin-left: 2%;margin-top: 0%;margin-bottom: 3%; padding-top:2%">
          <font color="#0066cc"><a href="/"><span style="background-color:#FFFFFF;">首頁</span></a>
          </font>
          <span style="background-color:#FFFFFF;">&nbsp;</span><a href="http://www.nctu.edu.tw/"><font color="#0066cc">
          <span style="background-color:#FFFFFF;">國立交通大學</span>
          </font></a>
          <span style="background-color:#FFFFFF;">&nbsp;</span><a href="http://www.life.nctu.edu.tw">
          <font color="#0066cc">
          <span style="background-color:#FFFFFF;">生科院</span>
          </font></a>
          <span style="background-color:#FFFFFF;">&nbsp;</span>
          <a href="#">
          <font color="#0066cc">
            <span style="background-color:#FFFFFF;">網站地圖</span>
          </font>
          </a>
        </p>

        <p style="margin-left: 2%;">
          <span style="font-size:36px;">
            <strong>
            <span >國立交通大學跨領域生醫工程實驗動物中心</span>
            </strong>
          </span>
          <br>
          <span style="font-family: arial, sans-serif; font-size: 26px;">Laboratory Animal Center of National Chiao Tung University</span>
        </p>
    </div>

    <div class="navbar">
      <ul>
      <li><a href="#home">中心公告事項</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">中心介紹</a>
        <div class="dropdown-content">
          <a href="/introduction-history">中心間介</a>
          <a href="/工作職掌">工作職掌</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">實驗動物中心</a>
        <div class="dropdown-content">
          <a href="/animaldata">實驗動物資料</a>
          <a href="/animalhealthmonitor">動物健康監測</a>
        </div>
      </li>
      <li><a href="/precautions">使用項知</a></li>
      <li class="dropdown">
        <a href="/service" class="dropbtn">服務項目</a>
        <div class="dropdown-content">
          <a href="/animalsadopted">校內動物代養</a>
          <a href="/outanimalsadopted">校外動物代養</a>
          <a href="/othersservice">其他技術服務</a>
          <a href="/ivis">非侵入式3D活體分子影像系統(IVIS system)</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">實驗動物照護及使用委員會</a>
        <div class="dropdown-content">
          <a href="/iacuc-policy">委員會政策</a>
          <a href="/iacuc-legislation">委員會法規</a>
          <a href="/iacuc-animalexperimentapplication">動物實驗申請</a>
          <a href="/iacuc-userbadreport">實驗動物照護及使用不良通報</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">教育訓練</a>
        <div class="dropdown-content">
          <a href="/training-trainingcourses">教育訓練時間表與課程資訊</a>
          <a href="/training-qualified">訓練合格名單</a>
        </div>
      </li>
      <li><a href="/download">下載區</a></li>
      <li><a href="#news">Q&A</a></li>
      <li><a href="#news">友善連結</a></li>
    </ul>
    </div>

</div>