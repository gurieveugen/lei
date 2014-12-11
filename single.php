<?php
/**
 *
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
<?php get_header(); ?>
<?php
$image = TDU.'/images/img-visual.jpg';
if(has_post_thumbnail())
{
	$image = \__::getThumbnailURL(get_the_id());
}
?>

<div class="visual inner" style="background-image: url(<?php echo $image; ?>);"></div>
<div class="center-wrap">
	<?php if ( have_posts() ) : the_post(); ?>
	<article class="content-page">
		<div class="title-page-row cf">
			<h1 class="title-page"><?php the_title(); ?></h1>
			<a href="<?php echo get_permalink(8); ?>">&lt; Back to Projects</a>
		</div>
		<div class="s-content content-style">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div>
	</article>
	<?php endif; ?>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
