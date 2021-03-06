<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zillah
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post entry-content-wrap' ); ?>>

	<header class="entry-header">
		<div class="content-inner-wrap">
			<?php
			zillah_posted_date();
			the_title( '<h2 class="entry-title entry-title-blog"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			zillah_category();
			?>
		</div>
	</header><!-- .entry-header -->

	<?php
		zillah_post_image();
	?>

	<div class="entry-content">
		<div class="content-inner-wrap">
			<?php

				$pos = strpos( $post->post_content, '<!--more-->' );
				if ( $pos <= 0 ) {
					the_excerpt();
				} else {
					the_content( false );
					echo zillah_read_more_link();
				}

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zillah' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
