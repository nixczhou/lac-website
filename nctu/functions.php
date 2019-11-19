<?php  
	
	function classical_file() {
		
		wp_enqueue_style('classical', get_stylesheet_uri() );
		wp_enqueue_style('animate-classical', get_stylesheet_directory_uri(), '/css/animate.css' );
        
	}
	
    add_action('wp_enqueue_scripts', 'classical_file');
    
    function cool_scripts(){
        wp_enqueue_script('ClickInOut', get_stylesheet_directory_uri() . '/js/functions.js', array('jquery'), false);
    }

    add_action('wp_enqueue_scripts', 'cool_scripts');
    
    
	function classical_features(){
		register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerMenuLocation', 'Footer Menu Location');

		add_theme_support('title-tags');
		
	}

	add_action('after_setup_theme', 'classical_features');

	function awesome_widget_setup(){

		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>'
		));

        register_sidebar(array(
            'name' => 'Sidebar 交青快餐車',
            'id' => 'sidebar-2',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>'
        ));

	}

	add_action('widgets_init', 'awesome_widget_setup');

	add_theme_support(html5, array('comment-list', 'comment-form', 'search-form', 'gallery'));

	
    add_theme_support( 'post-thumbnails' );
    
    function add_pages_to_dropdown( $pages, $r ){
        if ( ! isset( $r[ 'name' ] ) )
            return $pages;
        
        if ( 'page_on_front' == $r[ 'name' ] ) {
            $args = array(
                'post_type' => 'post'
                          );
            
            $portfolios = get_posts( $args );
            $pages = array_merge( $pages, $portfolios );
        }
        
        return $pages;
    }
    add_filter( 'get_pages', 'add_pages_to_dropdown', 35, 119 );

    //------------custom comment fields-----------------//
    
    
    
    add_action( 'comment_post', 'save_comment_meta_data' );
    function save_comment_meta_data( $comment_id ) {
        add_comment_meta( $comment_id, 'major', $_POST[ 'major' ] );
    }
    
    add_filter( 'get_comment_author_link', 'attach_major_to_author' );
    function attach_major_to_author( $author ) {
        $major = get_comment_meta( get_comment_ID(), 'major', true );
        if ( $major )
            $author .= " ($major)";
        return $author;
    }

    //-------------------------------------------------//

    //Display post by specific category function
    function wpb_postsbycategory() {
        // the query
        $the_query = new WP_Query( array( 'category_name' => '交青快餐車, 故事咖啡屋',  'posts_per_page' => 5 ) ); 
         
        // The Loop
        if ( $the_query->have_posts() ) {
            $string .= '<ul class="postsbycategory widget_recent_entries">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
            }
        } else {
            // no posts found
        }
        $string .= '</ul>';
         
        return $string;
         
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    
    // Add a shortcode
    add_shortcode('categoryposts', 'wpb_postsbycategory');
         
    // Enable shortcodes in text widgets
    add_filter('widget_text', 'do_shortcode');


    //Display post by news category
    function wpb_newspost() {
        // the query
        $the_query = new WP_Query( array( 'category_name' => '活動公告',  'posts_per_page' => 5 ) ); 
         
        // The Loop
        if ( $the_query->have_posts() ) {
            $string .= '<ul class="postsbycategory widget_recent_entries">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
            }
        } else {
            // no posts found
        }
        $string .= '</ul>';
         
        return $string;
         
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    
    // Add a shortcode
    add_shortcode('newspost', 'wpb_newspost');
         
    // Enable shortcodes in text widgets
    add_filter('widget_text', 'do_shortcode');


// For counting number of page view in Wordpress 
    function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    
?>
