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
		<div class="single-blog clearfix">
			
		<?php 

			if (has_post_thumbnail()) {
				the_post_thumbnail('full', array('class' => "blog-pic"));
			}
		?>
			<p><span>Blog</span></p>
			<h2><?php the_title(); ?></h2>
			<p class="date"><?php echo get_the_date('F j, Y'); ?></p>
			<div class="single-main">
				<div class="single-content">
					<p><?php the_field('blog_content'); ?></p>
				</div>
				<div class="sidebar">
					<h3>Latest Blog Posts</h3>
				<?php  
					$currentPostID= get_the_id();
					
					$args= array(
							'category_name' => 'blog-post',
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
										<p class="date date-blog-home"><?php echo get_the_date('F j, Y'); ?></p>
										
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

