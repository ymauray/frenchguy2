<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>
    <header class="entry-header">
        <?php
        the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        ?>
    </header>

	<div class="entry-content">
        <?php
			the_content( sprintf(
				'Continue reading %s', the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">Pages:</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">Page </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
    </div>

</article>
