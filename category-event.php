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

<main>
<div class="contain-blog">
		<div class="blog clearfix">
			<h2>Latest Events</h2>
			<div class="blog-content clearfix">
				<?php  

					echo '<ul class="blog-archive-posts">';
					if (have_posts() ) : while (have_posts() ) : the_post(); ?>

					

						<li class="clearfix">
						<?php 
									$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(900,900) );
								
								?>
							
								<div class="blog-square" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
								</div>
								<div class="blog-content-text clearfix">
									<a href="<?php the_permalink(); ?>" class="blog-title-home btn-transition">
										<h3><?php the_title(); ?></h3>
									</a>
									<p class="date-main date-blog-home">
									<?php 
									// get raw date
									$date = get_field('event_date', false, false);
									
									// make date object
									$date = new DateTime($date);

									?>
									<?php echo $date->format('F d, Y'); ?></p>
									<?php echo custom_field_excerpt_events(); ?> 
									<a href="<?php the_permalink(); ?>" class="btn-transition btn-styles more">Read more</a>
								</div>
						
						</li>

					<?php 
						endwhile; endif; 
						echo '</ul>';
					
					?>
		
            </div>  <!-- close blog excerpt home -->
		</div> <!-- close blog-home -->
    </div> <!-- contain blog -->
</main>

<?php get_footer(); ?>

