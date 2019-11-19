<?php get_header();  ?>

<link href="/wp-content/themes/LAC/nctu/slider/jquery-gallery.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous"></script>
<script src="/wp-content/themes/LAC/nctu/slider/jquery-gallery.js"></script>

<script>
	var screensize = document.documentElement.clientWidth;
	$(function() {
	  $('.gallery-slideshow').slideshow({
	    // default: 2000
	    interval: 3000,
	    // default: 500
	    width: screensize,
	    // default: 350
	    height: 350
	  });
	});
</script>

<ul class="gallery-slideshow">
  <li><img src="http://cea.life.nctu.edu.tw/uploads/ad_image/file/5530af5f7470006c70090000/Home.png"/></li>
  <li><img src="http://cea.life.nctu.edu.tw/uploads/ad_image/file/5530cac9747000439c1f0000/banner-after.jpg"/></li>
  <li><img src="http://cea.life.nctu.edu.tw/uploads/ad_image/file/560e8f74ddcc3b1854000054/P_20151002_1148271.jpg"/></li>
  <li><img src="http://cea.life.nctu.edu.tw/uploads/ad_image/file/560e8fc0ddcc3b18510000cb/P_20151002_1148331.jpg"/></li>
  <li><img src="http://cea.life.nctu.edu.tw/uploads/ad_image/file/560e900eddcc3b1854000059/P_20151002_1148571.jpg"/></li>
  <li><img src="http://cea.life.nctu.edu.tw/uploads/ad_image/file/58b8de08ddcc3b1b0b000eb6/%E5%8B%95%E7%89%A9%E4%B8%AD%E5%BF%83-1.jpg"/></li>
</ul>

<div class="homepage-content">	
	<div class="news-column" style="float:left; width: 50%;">
		<h2>最新消息</h2>
		<?php
		    $currentCategory = single_cat_title("", false);//all single
		    
		    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		    $query = array(
		                   'category_name' => $currentCategory,
		                   'paged'=> $paged,
		                   'posts_per_page' => '10'
		                   );
		    $pageposts = new WP_Query($query);
		  	while ( $pageposts->have_posts() ) : $pageposts->the_post(); ?>
		
		<li style="list-style: none;">
			<span class="time"><?php the_modified_date('Y.m.d') ?>&nbsp;&nbsp; | &nbsp;&nbsp; </span>
			<div class = "news-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		</li>
		<?php endwhile; ?>
	</div>

	<div class="anouncement_column" style="float: left; width:15%; padding-left: 2%; padding-right: 2%;font-size: 1.2em;">
		<h4 style="color:red;">本中心接受農委會動物科學應用機構查核，查核結果為『優等』。</h4>
	</div>

	<div class="english_column" style="float: left; font-size: 1.2em;">
		<h4 style="color:blue;">英文簡介(English Introduction)</h4>
	</div>
	

</div>


<?php wp_footer(); ?>