<?php
get_header(); ?>

<?php 
if ( have_posts() ) :
    // Start the loop.
    while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
    // End the loop.
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination( array(
        'prev_text'          => 'Previous page',
        'next_text'          => 'Next page',
        'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
    ) );
else:
    get_template_part( 'content', 'none' );
endif;
?>

<?php get_footer(); ?>