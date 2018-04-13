<?php
/**
 * Home Page Template for ACTSS
 * 
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php
/**
 * Home Page Template for ACTSS
 * 
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Banner -->
<div class="banner">
	<div class="<?php echo $container; ?>">
		<div class="banner-text">
			<h4>Animal Cancer Therapy Subsidization Society</h4>
		</div>
  </div>
</div>
<!-- /Banner -->

<main>
	<div class="contain-single-blog">
		<div class="single-blog">
		<?php 

			if (has_post_thumbnail()) {
				the_post_thumbnail('full', array('class' => "blog-pic"));
			}
		?>
			<p><span>Blog</span></p>
			<h2><?php the_title(); ?></h2>
			<p><?php the_date(); ?></p>
			<div class="single-content">
				<p><?php the_field('blog_content'); ?></p>
			</div>
			<div class="sidebar">

			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>

