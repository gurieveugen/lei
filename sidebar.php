<?php
/**
 * @package WordPress
 * @subpackage Base_theme
 */
?>
<?php if ( is_active_sidebar('footer-sidebar') ) : ?>
<section class="b-blocks cf">
	<?php dynamic_sidebar( 'footer-sidebar' ); ?>
</section>
<?php endif; ?>
