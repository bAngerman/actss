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
			<h2>Latest Posts</h2>
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
                                    <p class="date date-blog-home"><?php echo get_the_date('F j, Y');?></p>
                                    <?php echo custom_field_excerpt_blog(); ?> 
                                    <a href="<?php the_permalink(); ?>" class="btn-transition btn-styles more">Read more</a>
                                </div>
						</li>

					<?php 
						 endwhile; endif; 
						echo '</ul>';
					
					?>


		
				</div>  <!-- close blog content -->
				<div class="nav-next alignright btn-transition btn-styles"><?php next_posts_link( 'More Blog Posts' ); ?></div>
				<div class="nav-previous alignleft btn-transition btn-styles"><?php previous_posts_link( 'Previous Blog Posts' ); ?></div>
		</div> <!-- close blog -->
		<div class="sidebar-blog">
			<img src="">
			<p>ACTSS is a not-for-profit society dedicated to bringing affordable modern veterinary cancer treatment to pets. Through our programs we provide subsidies to dedicated pet owners. We aim to educate animal owners and veterinarians on the availability, uses and benefits of advanced cancer therapies in the treatment of veterinary cancers.</p>
			
		</div>
    </div> <!-- contain blog -->
</main>

<?php get_footer(); ?>

