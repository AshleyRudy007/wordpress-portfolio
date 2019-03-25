<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://www.linkedin.com/in/ashley-rudolph-97a87a55/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://github.com/AshleyRudy007" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
					<a href="https://www.instagram.com/ashleyrudy_codes/" class="soc-icon in"><span class="screen-reader-text">Instagram</span></a>
					<a href="https://www.facebook.com/ashley.rudy14" class="soc-icon fb"><span class="screen-reader-text">Facebook</span></a>
					<a href="https://twitter.com/ashleyvoudrie" class="soc-icon tw"><span class="screen-reader-text">Twitter</span></a>
				</div>
				<a href="<?php echo site_url('/portfolio/'); ?>" class="btn">View My Portfolio</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
