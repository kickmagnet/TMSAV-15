<?php
/**
 * Template part for displaying posts.
 *
 * @package TMSAV-15
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<!-- try it -Clint -->
			<div id="rentnav">
    <ul>
        <li><a href="http://texasmediasystems.com/rentals">Rental Policies</a></li>
		<li><a href="http://texasmediasystems.com/rentals/camcorder-rentals/">Camcorders</a></li>
        <li><a href="http://texasmediasystems.com/rentals/lens-rentals/">Lenses</a></li>
        <li><a href="http://texasmediasystems.com/rentals/support/">Support</a></li>
		<li><a href="http://texasmediasystems.com/rentals/decksmedia/">Decks/Media</a></li>
		<li><a href="http://texasmediasystems.com/rentals/presentation/">Presentation</a></li>
		<li><a href="http://texasmediasystems.com/rentals/audio/">Audio</a></li>
		<li><a href="http://texasmediasystems.com/rentals/converters/">Converters</a></li>
		<li><a href="http://texasmediasystems.com/rentals/switchers/">Switchers</a></li>
		<li><a href="http://texasmediasystems.com/rentals/lighting/">Lighting</a></li>
		<li><a href="http://texasmediasystems.com/rentals/services/">Packages & Services</a></li>
    </ul>
</div>
<div class="clearit">&nbsp;</div>
	<hr class="nomarginsareyoukiddingme" />
						
						
						<!-- end 'try it' -Clint -->
		
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php texas_media_systems_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content nomarginsareyoukiddingme">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'texas-media-systems-theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'texas-media-systems-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php texas_media_systems_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
