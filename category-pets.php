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
<div class="contain-pets">
		<div class="pets clearfix">
			<h2>Our Pets</h2>
				<?php  
					$args = array(
						'category_name' => 'pets',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'posts_per_page' => 12,
						'posts_type'		=> 'post',
						'post_status'		=> 'publish',
						
					);

					$myposts = get_posts($args);

					echo '<ul class="blog-pets-posts">';
					foreach ($myposts as $post) : setup_postdata($post);

					?>

						<li class="clearfix">
                        <a href="<?php the_permalink(); ?>" class="blog-title-home">
                                <?php 

                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => "blog-pic"));
                                    }
                                ?>
                                <div class="pets-content-text clearfix">
                                    
                                         <h3><?php the_title(); ?></h3>
                                    </a>
                                    <h5><?php the_field('breed'); ?> </h5>
							        <h5><?php the_field('cancer_type'); ?> </h5>
                                </div>
						</li>

					<?php 
						endforeach;
						echo '</ul>';
					
                    ?>

		</div> <!-- close pets -->
    </div> <!-- contain pets -->
</main>

<?php get_footer(); ?>

