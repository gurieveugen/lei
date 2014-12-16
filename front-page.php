<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>

<?php get_header(); ?>
<?php the_post(); ?>
<?php
$image = TDU.'/images/img-visual.jpg';
?>

<div class="visual" style="background-image: url(<?php echo $image; ?>);">
	<div class="center-wrap">
		<img src="<?php echo TDU; ?>/images/logo-leiconnotley.png" alt="" class="logo">
	</div>
</div>
<div class="center-wrap">
	<article class="section-content">
		<header class="header-s-content cf">
			<h1 class="title-page"><?php the_title(); ?></h1>
			<a href="#" class="btn-view right open" id="btn-view-content">view information</a>
		</header>
		<div id="toggle-content" class="s-content cf">
			<p><?php the_content(); ?></p>
		</div>
	</article>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>