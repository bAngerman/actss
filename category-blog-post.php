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
<div class="contain-blog">
		<div class="blog clearfix">
			<h2>Latest Posts</h2>
			<div class="blog-content clearfix">
				<?php  
					$args = array(
						'category_name' => 'blog-post',
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

                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => "blog-pic"));
                                    }
                                ?>
                                <div class="blog-content">
                                    <a href="<?php the_permalink(); ?>" class="blog-title-home">
                                         <h3><?php the_title(); ?></h3>
                                    </a>
                                    <p class="date date-blog-home"><?php the_date(); ?></p>
                                    <?php echo custom_field_excerpt_blog(); ?> 
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

