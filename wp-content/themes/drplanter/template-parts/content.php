<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drplanter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
	<?php 
	
		drplanter_post_thumbnail(); 

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				/*drplanter_posted_on();
				drplanter_posted_by();*/
				drplanter_entry_footer();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>	
	
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;
		?>
	</div><!-- .entry-header -->	

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'drplanter' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		else :
			the_excerpt();
		endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'drplanter' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
 
</article><!-- #post-<?php the_ID(); ?> -->
