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
    <?php echo do_shortcode('[swpm_payment_button id=567]'); ?>
  </div>
</div>
<main>
    <div class="contain-memberships">
        <div class="memberships clearfix">
            <div class="memberships-info">
                <h2>Memberships</h2>
                <p>Looking to get more involved in a more dynamic way with ACTSS? Getting a membership might be the best option for you! Members play a key role in ACTSS, not only by providing great moral support but also by helping to  determine the future of those applying for subsidization. This is vital to our organization, and would love to have you join us! </p>
            
                <a href="" class="btn-transition btn-styles">Get More Info</a>
                
                <?php echo do_shortcode('[swpm_payment_button id=567]'); ?>
                
            </div>

        </div>
    </div>
    <div class="contain-membership-faq">
        <div class="membership-faq">
            <?php echo do_shortcode("[accordions_pickplguins id='559']"); ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>