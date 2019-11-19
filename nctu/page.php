<?php get_header();  ?>

<!-- Return to Top Button -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
<!-------------------------->

<div id="container">
    <div id="content" class="pageContent">

    <h1 class="entry-title"><?php the_title(); ?></h1> <!-- Page Title -->
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
    </div><!-- #content -->         
</div><!-- #container -->

<?php wp_footer(); ?>
