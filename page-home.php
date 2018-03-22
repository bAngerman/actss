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

  </div>
</div>

<!-- /Banner -->
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

  </div>
</div>

<!-- /Banner -->
<main>
    <div>
        <img src="">
    </div>
    <div class="about-home">
      <div class="about-text-home clearfix">
        <h2>About Us</h2>
        <p>
            ACTSS is a not-for-profit society dedicated to bringing affordable modern veterinary cancer treatment to pets. Through our programs we provide subsidies to dedicated pet owners. We aim to educate animal owners and veterinarians on the availability, uses and benefits of advanced cancer therapies in the treatment of veterinary cancers.
        </p>
        <a href="page-about-us.php">Read More</a>
      </div>
      <div class="about-donation-home">
        <div class="about-donation-overlay">
          <p>Your help gets us one step closer to helping families and their pets. Thanks for your generous support, we couldn’t do it without you.</p>
          <a href="#">Donate Now!</a>
        </div>
        <img src="">
      </div>  
    </div>
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
			<li>
				<a href="<?php the_permalink(); ?>">
				<h3>
					<?php the_title(); ?>
				</h3>
				
				<?php 

				if (has_post_thumbnail()) {
				the_post_thumbnail('thumbnail', array('class' => "alignRight"));
		 		}

				 ?>
				 		</a>
				<p><?php echo get_post_meta($post->ID, 'details', true); ?></p>
		

			</li>

		<?php 
	endforeach;
		echo '</ul>';
		

	 ?>
		<a href="#" class="more-events-btn">More Events</a>
    </div>
    <div class="pets-home clearfix">
		<h2>Our Pets</h2>
		<div class="pets-home-overlay clearfix">
			<?php  
				$args = array(
					'category_name' => 'pets',
					'posts_per_page' => 1,
					'orderby'			=> 'rand',
					'posts_type'		=> 'post',
					'post_status'		=> 'publish',
					
				);

				$myposts = get_posts($args);

				echo '<ul class="blog-post">';
				foreach ($myposts as $post) : setup_postdata($post);

				?>
					<li class="clearfix">
						<a href="<?php the_permalink(); ?>" class="pets-title-home">
						<?php 

							if (has_post_thumbnail()) {
								the_post_thumbnail('thumbnail', array('class' => "pet-pic"));
							}
						?>
						<h3><?php the_title(); ?></h3>
						</a>
						<p><?php the_excerpt(); ?></p>
						

					</li>

				<?php 
					endforeach;
					echo '</ul>';
				
				?>
				<a href="#" class="more-pet-btn">Read More</a>
	
		</div>  <!-- close pets overlay -->
	</div> <!-- close pets-home -->
</main>

<?php get_footer(); ?>

<?php get_footer(); ?>