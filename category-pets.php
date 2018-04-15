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
		<div class="blog clearfix">
			<h2>Our Pets</h2>
			<div class="blog-content clearfix">
				<?php  
					$args = array(
						'category_name' => 'pets',
                        'orderby'			=> 'rand',
                        'posts_per_page' => -1,
						'posts_type'		=> 'post',
						'post_status'		=> 'publish',
						
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
                                    <a href="<?php the_permalink(); ?>" class="blog-title-home">
                                         <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>
						</li>

					<?php 
						endforeach;
						echo '</ul>';
					
					?>
		
            </div>  <!-- close blog excerpt home -->
            <div class="filter-date">
                <h4> Filter by Date</h4>
                <select name="archive" onChange='document.location.href=this.options[this.selectedIndex].value;'>
          <option value="0"><?php echo attribute_escape(__('Select Month')); ?></option>
          <?php wp_get_archives('type=monthly&category=event&format=option&show_post_count=1'); ?> 
        </select>
            </div>
		</div> <!-- close blog-home -->
    </div> <!-- contain blog -->
</main>

<?php get_footer(); ?>

