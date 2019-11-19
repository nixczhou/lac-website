<?php get_header(); ?>

<div class = "row">
<div class="title-bar col-lg-9 col-sm-8 col-md-8 col-xs-12">
<nav class="navi">
<a href="<?php echo site_url('/index.php'); ?>">首頁</a>
<span> ＞ </span>
<a href="<?php echo site_url('/實驗出版'); ?>">實驗出版</a>
<span> ＞ </span>
<a href="<?php echo site_url('/人文快餐車'); ?>">交青快餐車</a>
<span> ＞ </span>
<a href="#"><?php echo get_the_title(); ?></a>
</nav>

<!--Post Title--->
<h1 class = "post-title"><?php the_title(); ?></h1>
</div>

</div>

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

<div id="ttr_main" class="row">
<div id="ttr_content" class=" content-bar col-lg-9 col-sm-8 col-md-8 col-xs-12">

<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

<p style="padding-left: 12.5%;"><?php the_content(__('(more...)')); ?></p>

<div class="but">
<button onclick="hide_facebook()" type="button" class="btn btn-outline-secondary diss">留言/搶答</button>

<button onclick="hide_comment()" type="button" class="btn btn-outline-secondary diss2">發問問題</button>
</div>

</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<!----槍答---->
<div class = "comment-box showup" id = "comment" style = "display:none;">
<?php
    
    if(comments_open()){
        comments_template();
    }
    ?>
</div>

<!----發問問題---->
<div class="fb-style showup2" id = "facebook" style="display:none;">
<h2><strong>發問問題</strong></h2>
<div class="fb-comments" data-href="http://52.194.163.46/2018/10/26/%E6%88%B0%E9%AC%A5%E6%B0%91%E6%97%8F%E6%89%80%E4%B8%8D%E7%9F%A5%E7%9A%84%E5%9C%8B%E5%AE%9A%E5%81%87%E6%97%A5-%E4%BF%84%E5%9C%8B%E6%B0%91%E6%97%8F%E5%9C%98%E7%B5%90%E6%97%A5/" data-numposts="1"></div>
</div>

</div>

</div>
<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

