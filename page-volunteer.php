<?php
/**
 * Volunteer Template for ACTSS
 * 
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<main>
    <div class="contain-memberships">
        <div class="memberships clearfix">
            <h2>Volunteer</h2>
            <p>ACTSS is a volunteer based non-profit charitable organization and is always looking for positive, dedicated volunteers to become a part of our team. As our organization continues to grow, so does our need for volunteers.</p>

                <p>ACTSS has a volunteer recognition program in place and is developing a long-service award program. We support and encourage youth volunteer participation with parental consent.</p>

            <p>ACTSS has such a wide variety of volunteer opportunities with events throughout the years. Trade show display at dog/cat shows, Pets in the Park, working a casino and major fundraising events such as our annual dog wash and Halloween extravaganza, are just a few of the types of activities we do. We are always looking for committee members as well.</p>
            <a href="" class="btn-transition btn-styles">Get More Info</a>
            <a href="" class="btn-transition btn-styles">Sign Up Now!</a>
        </div>
        <div class="contain-membership-photos">
            <div class="membership-photos row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/actss/img/volunteer1.jpg" alt="">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/actss/img/volunteer2.jpg" alt="">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/actss/img/volunteer3.jpg" alt="">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/actss/img/volunteer4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>