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
    <div class="contain-page">
        <div class="page-content col">
            <?php 
            if (have_posts()) 
            {
                while (have_posts()) 
                {
                    the_post();
                    the_content();
                }
            }
	        ?>


        </div>
    </div>
</main>

<?php get_footer(); ?>

