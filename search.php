<?php
/**
 *
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
<?php get_header(); ?>

<div class="visual inner" style="background-image: url(<?php echo TDU; ?>/images/img-visual.jpg);"></div>
<div class="center-wrap bottom-space">
	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'theme' ), get_search_query() ); ?></h1>
		</header>

		<?php include("loop.php"); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'theme' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>



<?php get_footer(); ?>
