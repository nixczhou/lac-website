<?php 

    if(post_password_required()){
        return;
    }

?>

<div id="comments" class="comments-area">

    <?php
        
        
        

    $fields = array(
        'author' => 
                    '<div class="comment-author"><label for="author">' . __( '名字or暱稱: ', 'domainreference' ) .
                        ( $req ? '<span class="required"></span>' : '' ) . '</label>' .
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                        '" size="30"' . $aria_req . ' /></div>',
                    
         
                    
        'url' =>
                    '<p class="comment-form-url"><label for="">' . __( '學號or證號: ', 'domainreference' ) .
                    ( $req ? '<span class="required"></span>' : '' ) .'</label>' .
                    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" size="30" /></p>',

        'email' =>  '<div class="comment-form-email">'.'<label for="email">'. 'e-mail: <span class="required"></span></label> '.'<input id="email" name="email"' .'type="email"'.' value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></div>',
                    
        
        'major' =>
                    '<div class="comment-studentMajor"><label for="major">' . __( '系所或單位: ', 'domainreference' ) .
                    ( $req ? '<span class="required"></span>' : '' ) . '</label>' .
                    '<input id="major" name="major" type="text" value="' .
                    '" size="30"' . $aria_req . ' /></div>'
        
    );

    $design = array(
        'class_submit' => 'btn-submit',
        'label_submit' => '提交',
                    
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) . '</label><textarea id="comment-text" name="comment" cols="45" rows="8" aria-required="true" placeholder="請輸入搶答 / 留言內容 （限100字內）" ></textarea></p>',
                    
        'comment_notes_before' => '我要搶答&留言',
        'title_reply' => '',
        
        
        
        'fields' => apply_filters('comment_form_default_fields', $fields),
    );
    
        

        
        
        comment_form( $design );
        
        
        
        ?>

    <hr>

    <?php
    
        if(have_comments()){ ?>


    <?php }
    
        ?>

    <h2 class="comment-title">

    </h2>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through?
        ?>
    <nav id="comment-nav-above" class="navigation comment-navigation">
    <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'nctu' ); ?></h2>
    <div class="nav-links">
    <?php
        if ( $prev_link ) {
            ?>
    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'nctu' ) ); ?></div>
    <?php
        }
    
        if ( $next_link ) {
            ?>
    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'nctu' ) ); ?></div>
    <?php } ?>
    </div><!-- .nav-links -->
    </nav><!-- #comment-nav-above -->
    <?php
        endif; // Check for comment navigation.
        ?>



    <ol class="comment-list">
    <?php
            $args = array(
                          'walker' => null,
                          'max_depth' => 0,
                          'style' => 'ol',
                          'type' => 'all',
                          'page' => 10,
                          'per_page' => '',
                          'avatar_size' => 0,
                          'reverse_top_level' => false,
                          'reverse_children' => '',
                          'format' => 'html5',
                          'short_ping' => false,
                          'echo' => true
                  
                          );
            wp_list_comments($args);
            ?>

        </ol>

        <?php
            if(!comments_open() AND get_comments_number()){
                
            }
            ?>
        <p class="no-comments"><?php esc_html_e('', 'NCTU') ?></p>

</div>


