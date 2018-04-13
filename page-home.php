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
	<div class="contain-about-home">
		<div class="about-home clearfix">
		<div class="about-text-home clearfix">
			
			<h2>About Us</h2>
			<p>
				ACTSS is a not-for-profit society dedicated to bringing affordable modern veterinary cancer treatment to pets. Through our programs we provide subsidies to dedicated pet owners. We aim to educate animal owners and veterinarians on the availability, uses and benefits of advanced cancer therapies in the treatment of veterinary cancers.
			</p>
			<a href="page-about-us.php" class="btn-transition btn-styles">Read More</a>
			</div> <!-- about text home close -->
		

      <div class="about-donation-home clearfix">
        <div class="about-donation-overlay">
          <p>Your help gets us one step closer to helping families and their pets. Thanks for your generous support, we couldn’t do it without you.</p>
          <a href="#" class="btn-transition btn-styles">Donate Now!</a>
		</div> <!-- donation overlay close -->
        <div class="donation-home-img"></div>
	  </div>  <!-- about donation home close -->
	  </div><!-- about home close -->
	 </div><!-- contain home close -->
	<div class="contain-events-home">
		<div class="events-home clearfix">
			<h2>Events</h2>

		<?php  
			$args = array(
				'category_name' => 'event',
				'posts_per_page' => 1,
				'orderby'			=> 'date',
				'order' => 'DESC',
				'posts_type'		=> 'post',
				'post_status'		=> 'publish',
				
			);

			$myposts = get_posts($args);

			echo '<ul class="blog-post">';
			foreach ($myposts as $post) : setup_postdata($post);

			?>
				<li class="clearfix">
				<?php 
									$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(552,230) );
								
								?>
								<img class="event-pic" src="<?php echo $backgroundImg[0]; ?>" alt="">

					<a href="<?php the_permalink();?>" class="btn-transition">
					<h3><?php the_title(); ?></h3>

					<?php 
					// get raw date
					$date = get_field('event_date', false, false);
					
					// make date object
					$date = new DateTime($date);

					?>
					<p class="date"><?php echo $date->format('F d, Y'); ?></p>
					</a>

					<?php echo custom_field_excerpt_events(); ?> 
				</li>

			<?php 
		endforeach;
			echo '</ul>';
			

		?>
			<a href="category/events" class="more-events-btn btn-transition btn-styles">More Events</a>
		</div><!-- events-home close -->
	</div><!-- contain events home close -->
	<div class="contain-pets-home">
		<div class="pets-home clearfix">
			<h2>Our Pets</h2>
			<div class="pets-home-overlay clearfix">
				<?php  
					$args = array(
						'category_name' => 'pets',
						'posts_per_page' => 3,
						'orderby'			=> 'rand',
						'posts_type'		=> 'post',
						'post_status'		=> 'publish',
						
					);

					$myposts = get_posts($args);

					echo '<ul class="blog-post">';
					foreach ($myposts as $post) : setup_postdata($post);

					?>

						<li class="clearfix blue-box">
							<a href="<?php the_permalink(); ?>" class="pets-title-home btn-transition">
							<?php 

								if (has_post_thumbnail()) {
									the_post_thumbnail('full', array('class' => "pet-pic"));
								}
							?>
							<h3><?php the_title(); ?></h3>
							<h5><?php the_field('breed'); ?> </h5>
							<h5><?php the_field('cancer_type'); ?> </h5>
							</a>
							<p><?php echo custom_field_excerpt_pets(); ?> 
							</p>
							<div class="more-container">
								<a href="<?php the_permalink(); ?>" class="btn-transition btn-styles">Read more</a>
							</div>
							
						</li>

					<?php 
						endforeach;
						echo '</ul>';
					
					?>
					<a href="category/pets" class="more-pet-btn btn-transition btn-styles">More Pets</a>
		
			</div>  <!-- close pets overlay -->
		</div> <!-- close pets-home -->
	</div><!-- contain pets home -->
	<div class="contain-blog-home">
		<div class="blog-home clearfix">
			<h2>Blog</h2>
			<div class="blog-excerpt-home clearfix">
				<?php  
					$args = array(
						'category_name' => 'blog-post',
						'posts_per_page' => 2,
						'orderby'			=> 'DESC',
						'posts_type'		=> 'post',
						'post_status'		=> 'publish',
						
					);

					$myposts = get_posts($args);

					echo '<ul class="blog-post">';
					foreach ($myposts as $post) : setup_postdata($post);

					?>

						<li class="clearfix">
						<?php 
									$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(552,230) );
								
								?>
							<a href="<?php the_permalink(); ?>" class="blog-title-home">
							<div class="blog-content-header-home" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo $backgroundImg[0]; ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">

								

								<h3><?php the_title(); ?></h3>
								<p class="date date-blog-home"><?php the_date(); ?></p>

								
								
							</div>
							<div class="blog-content-home">
								<?php echo custom_field_excerpt_blog(); ?> 
							</div>
							</a>
							<div class="more-container">
								<a href="category/blog-post" class="btn-transition btn-styles">Read more</a>
							</div>
							
						</li>

					<?php 
						endforeach;
						echo '</ul>';
					
					?>
		
			</div>  <!-- close blog excerpt home -->
		</div> <!-- close blog-home -->
	</div>
</main>

<?php get_footer(); ?>

