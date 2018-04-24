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
            <h2>Sponsorship</h2>
            <p>Sponsorship is a noble way to get involved with ACTSS. Sponsors help us put on great fundraisers and help our organization with our day to day running. We couldn’t do the things we do without our sponsors, and we’re so grateful for them. Check out our past sponsors, or join the ranks. We’d love to have you on board.</p>

            <a href="" class="btn-transition btn-styles">Get More Info</a>
            <a href="" class="btn-transition btn-styles">Become a Sponsor!</a> <!-- This button would link to a form - most likely a google form to apply to become a sponsor -->
        </div>
    </div>
    <div class="contain-sponsors">
            <div class="sponsors">
                <h2>Our Sponsors</h2>
                <div class="sponsor-type"><h3>Lifesaver Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'lifesaver-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div><!-- \lifesaver sponsor -->
                <div class="sponsor-type"><h3>Media Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'media-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div> <!-- \ media sponsor -->
                
                <div class="sponsor-type"><h3>Hero Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'hero-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>
                <div class="sponsor-type"><h3>Ambassador Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'ambassador-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>
                <div class="sponsor-type"><h3>Inspiration Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'inspiration-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>
                <div class="sponsor-type"><h3>Friend Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'friend-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>
                <div class="sponsor-type"><h3>Volunteer Sponsor</h3>
                     <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'volunteer-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>
                <div class="sponsor-type"><h3>Pet Costume Contest Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'pet-costume-contest-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>
                <div class="sponsor-type"><h3>Goods Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'goods-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>
                <div class="sponsor-type"><h3>Services Sponsor</h3>
                    <div class="sponsor-logos">
                        <?php  
                        $args = array(
                            'category_name' => 'services-sponsor',
                            'posts_type'		=> 'post',
                            'post_status'		=> 'publish',
                        );

                        $myposts = get_posts($args);
                        echo '<ul class="sponsor-list">';
                        foreach ($myposts as $post) : setup_postdata($post);
                        ?>
                            <li class="clearfix">
                                <div class="sponsor-square">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => "sponsor-pic"));
                                        }   
                                    ?>
                                </div>
                                <div class="sponsor-name"><h4><?php the_field('name'); ?></h4></div>
                            </li>
                        <?php 
                            endforeach;
                            echo '</ul>';
                        
                        ?>
                    </div>
                </div>  
            </div>
        </div>
</main>
<?php
get_footer();
?>