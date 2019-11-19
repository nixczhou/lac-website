<?php get_header(); ?>

<div id="ttr_main" class="row" style="padding-top:12.5%;">
	<div id="ttr_content" style="width:70%;">

		<div class="row" style="padding-left: 12.5%;">
			<div class="col-12">
				<h2>所有文章</h2>
			</div>
		</div>

		<div class="row" style=" padding-left: 12.5%;font-size: 1.3em;">
			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => '活動公告','posts_per_page'=>-1)); ?>
			 
			<?php if ( $wpb_all_query->have_posts() ) : ?>
			 
			<ul>
			 
			    <!-- the loop -->
			    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			    <?php endwhile; ?>
			    <!-- end of the loop -->
			 
			</ul>
			 
			    <?php wp_reset_postdata(); ?>
			 
			<?php else : ?>
			    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>

	</div>
	<?php get_sidebar(); ?>

	<?php 
        
        if(comments_open()){
          comments_template();
        }
    ?>
</div>

<?php get_footer(); ?>