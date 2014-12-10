<?php
/**
 *
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
<?php get_header(); ?>

<div class="visual inner" style="background-image: url(<?php echo TDU; ?>/images/img-visual.jpg);"></div>
<div class="center-wrap">
	<?php if ( have_posts() ) : the_post(); ?>
	<article class="content-page">
		<h1 class="title-page"><?php the_title(); ?></h1>
		<div class="s-content content-style">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div>
	</article>
	<?php endif; ?>
	<section class="b-blocks cf">
		<div class="b-block">
			<a href="#" class="image">
				<img src="<?php echo TDU; ?>/images/img-1.jpg" alt="">
				<span>Click for more</span>
			</a>
			<h3><a href="#">Projects</a></h3>
		</div>
		<div class="b-block">
			<a href="#" class="image">
				<img src="<?php echo TDU; ?>/images/img-2.jpg" alt="">
				<span>Click for more</span>
			</a>
			<h3><a href="#">Our Team</a></h3>
		</div>
		<div class="b-block">
			<a href="#" class="image">
				<img src="<?php echo TDU; ?>/images/img-3.jpg" alt="">
				<span>Click for more</span>
			</a>
			<h3><a href="#">Accreditations</a></h3>
		</div>
	</section>
</div>

<?php get_footer(); ?>
