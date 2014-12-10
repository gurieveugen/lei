<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>

<?php if ( have_posts() ) : ?>

<div class="posts-holder">
<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('b-post-feed cf'); ?>>

		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<a href="<?php the_permalink(); ?>" class="image">
			<?php the_post_thumbnail('post-thumbnail'); ?>
		</a>
		<?php endif; ?>
		<div class="content">
			<header class="cf">
				<a href="<?php the_permalink(); ?>" class="link-more">VIEW more</a>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<?php 
			if(strpos($post->post_content, '<!--more-->'))
				the_content('');
			else {
				the_excerpt();
			}
			 ?>
		</div>
	</article><!-- #post -->

<?php endwhile; ?>
</div> <!-- .posts-holder -->
	
<?php theme_paging_nav(); ?>

<?php else: ?>
	
	<h1 class="page-title"><?php _e( 'Nothing Found', 'theme' ); ?></h1>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'theme' ); ?></p>
	<?php get_search_form(); ?>
	
<?php endif; ?>