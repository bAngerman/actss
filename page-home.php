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
		$the_query = new WP_Query(array('p'=> 108));
		if($the_query->have_posts()){
			echo '<ul class="blog-post">';
			while ($the_query->have_posts()){
			$the_query->the_post();
			echo '<li>';
			echo '<a href="';
				the_permalink();
		 	echo '">';
			echo '<h3>' . get_the_title() . '</h3>';
			if (has_post_thumbnail()) {
				the_post_thumbnail('thumbnail', array('class' => "alignRight"));
		 		}
			echo '<div><p>' . get_the_excerpt() . '</p>';
			echo '<p class="getdate">' . get_the_date() . '</p>';
			echo '<i class= "material-icons">check_circle</i></div>';
			echo '</li>';
		}
		echo '</ul>';

		wp_reset_postdata();
	}else {

	}
	 ?>
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
				<p><?php the_excerpt(); ?></p>
				</a>

			</li>

		<?php 
	endforeach;
		echo '</ul>';
		

	 ?>
		<a href="#" class="more-events-btn">More Events</a>
    </div>
    <div class="pets-home">
        <h2>Our Pets</h2>
        <div> 
         <!--Loop for pets category -->
        </div>
    </div>
</main>

<?php get_footer(); ?>

<?php get_footer(); ?>