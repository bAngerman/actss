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
	<div class="contain-single-blog">
		<div class="single-blog clearfix">
			
		<?php 

			if (has_post_thumbnail()) {
				the_post_thumbnail('full', array('class' => "blog-pic"));
			}
		?>
			<p><span>Events</span></p>
			<h2><?php the_title(); ?></h2>
			<p class="date"><?php the_date(); ?></p>
			<div class="single-main">
				<div class="single-content">
					<p><?php the_field('details'); ?></p>
					<div class="nav-next nav-pet alignleft btn-transition"><?php previous_post_link('%link', 'Previous Event', TRUE); ?></div>
					<div class="nav-next nav-pet alignright btn-transition"><?php next_post_link('%link', 'Next Event', TRUE); ?></div>
				</div>
				<div class="sidebar">
					<h3>Latest Events</h3>
				<?php  
					$currentPostID= get_the_id();
					
					$args= array(
							'category_name' => 'event',
							'post__not_in' =>	array($currentPostID),
							'posts_per_page' => 3,
							'orderby'			=> 'DESC',
							'posts_type'		=> 'post',
							'post_status'		=> 'publish'
							
							
						
					);

						$myposts = get_posts($args);

						echo '<ul class="blog-archive-posts">';
						foreach ($myposts as $post) : setup_postdata($post);

						?>

							<li class="clearfix">
									<?php 

										if (has_post_thumbnail()) {
											the_post_thumbnail('full', array('class' => "blog-pic"));
										}
									?>
									<div class="blog-content clearfix">
										<a href="<?php the_permalink(); ?>" class="blog-title-home btn-transition">
											<h4><?php the_title(); ?></h4>
										</a>
										<p class="date-main date-blog-home"><?php the_date(); ?></p>
										
									</div>
							</li>

						<?php 
							endforeach;
							echo '</ul>';
						
						?>

				</div><!-- sidebar close -->
			</div><!-- single main close -->
		</div><!-- single blog close -->
	</div><!-- singlecontain close -->
</main>

<?php get_footer(); ?>

