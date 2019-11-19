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


</div>
</div>
</div>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
