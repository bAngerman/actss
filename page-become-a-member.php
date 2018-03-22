<?php
/**
 * Become a Member Page Template for ACTSS
 * 
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Banner -->
<div class="banner">
  <div class="<?php echo $container; ?>">
    <?php echo do_shortcode('[swpm_payment_button id=156]'); ?>
  </div>
</div>


<?php get_footer(); ?>