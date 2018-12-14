<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modrzjwzki
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php if (is_singular()) echo 'padding-left:0; padding-right:0;'; ?>">

<div class="<?php 
if (is_singular())
{ 
	echo 'post-full'; 
} else {
	echo 'post-container'; 
}
?>">
	
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <img src="<?php echo $url; ?>" class="img-responsive content-image" style="margin:auto;" id="content-image"/>
		<div class="full-post <?php if (is_singular()) echo 'padding-article'; ?>" style="">
	<header class="entry-header">
		
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h2>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	<div class="entry-meta"> 
		
		<span class="time"><?php the_time('M d, Y');  ?></span>
		<a target="_blank"  href="https://twitter.com/modrzjwzky?lang=pl">@<?php the_author() ?></a>
		
	</div> <!-- entry meta end -->
	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading →', 'spritekit-v3' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spritekit-v3' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php modrzjwzki_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
</div>

</article><!-- #post-<?php the_ID(); ?> -->
</div>
</div>
<?php if(is_singular()):

?>	

	
	<div class="prev-links">
		<div class="container" style="max-width:900px;">
		<h3>Poprzedni</h3>
		<div style="margin:auto; max-width:650px;">
		<?php echo previous_post_link('%link'); ?>
		</div>
		</div>
	</div>

	<div class="post-links row">


	<?php 
	/*
	echo previous_post_link('<div class="col-xs-6" style="text-align:left;">< %link</div>');
	echo next_post_link('<div class="col-xs-6" style="text-align:right;"> %link ></div>');
	*/
	?>
</div>



	<h2 class="comments-h" >Komentarze</h2>


<?php 
	echo comment_form(); 
?>
	

	
	<?php 
	
else:
?>

	<hr class="separator" />
<?php
endif;
?>
