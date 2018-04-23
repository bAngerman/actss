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
<div class="contain-pets">
		<div class="contain-success-stories">
			<div class="success-stories">
				<h2>Success Stories</h2>
				<p>Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.Some text about success stories.</p>
				<a href="" class="btn-transition btn-styles">Chet Dobson Story</a>
				<a href="" class="btn-transition btn-styles">Lucky Moffat</a>
			</div>
		</div>
		<div class="pets clearfix">
			<h2>Our Pets</h2>
			<?php
				$cat_id = get_cat_ID('pets');
				$args=array(
				'cat' => $cat_id,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				?>
				<form name="jump">
				<select name="menu" onChange="location=document.jump.menu.options[document.jump.menu.selectedIndex].value;" value="Go">
				<option value="0"><?php echo attribute_escape(__('Select Pet')); ?></option>
				<?php
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<option value="<?php the_permalink() ?>"><?php the_title(); ?></option>
				<?php
				endwhile;
				}
			?>
			</select>
			
		</form>
				<?php 
					echo '<ul class="blog-pets-posts">';
					if (have_posts() ) : while (have_posts() ) : the_post(); ?>

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
						endwhile; endif; 
						echo '</ul>';
					
					?>
						<div class="nav-next alignright btn-transition btn-styles"><?php next_posts_link( 'More Pets' ); ?></div>
						<div class="nav-previous alignleft btn-transition btn-styles"><?php previous_posts_link( 'Previous Pets' ); ?></div>

		</div> <!-- close pets -->
    </div> <!-- contain pets -->
</main>

<?php get_footer(); ?>

