<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>

<?php get_header(); ?>

<div class="visual" style="background-image: url(<?php echo TDU; ?>/images/img-visual.jpg);">
	<div class="center-wrap">
		<img src="<?php echo TDU; ?>/images/logo-leiconnotley.png" alt="" class="logo">
	</div>
</div>
<div class="center-wrap">
	<article class="section-content">
		<header class="header-s-content cf">
			<h1 class="title-page">Welcome to Leiconnotley</h1>
			<a href="#" class="btn-view right open" id="btn-view-content">view information</a>
		</header>
		<div class="s-content">
			<p>leicon notley is a broad-based, professional engineering construction company with a particular competence in piping, pumping, pipelines and borefields, water supply and associated civil, mechanical, electrical and controls works.</p>
		</div>
	</article>
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