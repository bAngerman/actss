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
    <div class="resources">
        <div class="contain-cancer-questions">
            <div class="cancer-questions">
            <h2>Pet Cancer FAQ</h2>
            <p class="col">For many people the word cancer conjures up images of pain, decline and death. Veterinarians have learned through the years that when the word cancer is used to describe a pet’s disease, often the pet owner immediately develops the impression that little can be done to save their beloved friend. Fortunately, this is frequently not the case, as veterinary medicine has made tremendous progress during the past decades in the diagnosis and treatment of cancer in animals. Successful treatments are becoming more readily available with each passing year.</p>
           
            <?php echo do_shortcode("[accordions_pickplguins id='530']"); ?>
            </div>
            
        </div>
        <div class="contain-oncology">
            <div class="oncology clearfix">
                <h2>Oncology Centres</h2>
                <p>Albertans are extremely fortunate to have three state of the art veterinary oncology centres available to treat their pets should they develop cancer.</p>
                <div class="oncology-boxes clearfix">
                    <div class="yellow-box">
                        <h3>The Western Veterinary Cancer Centre</h3>
                        <h4>Calgary, AB</h4>
                        <p> Drs. Glenna and Neal Mauldin operate Alberta’s only oncology centre that provides radiation therapy for pets. The Mauldins supply both radiation and medical oncology diagnostics and treatment programs while oncology surgeon Dr. Dave Szentimrey performs specialized cancer surgeries.</p>
                        <div class="doctor-info">
                            <p>Dr. Neal Mauldin<br>
                            (403) 770-1340<br>
                            oncology@westernvet.ca</p>
                            <a href="https://vcacanada.com/western" target="_blank" class="btn-transition btn-styles">Visit their site</a>
                        </div>
                    </div>
                    <div class="yellow-box">
                        <h3>The Calgary Animal Referral and Emergency Centre (CARE)</h3>
                        <h4>Calgary, AB</h4>
                        <p> The Calgary Animal Refferal and Emergy Centre (CARE) based out of Calgary, AB has board certified medical oncologist Dr. Victoria Larson who  is heading up its oncology centre. They provide veterinary oncology care for Alberta pets.</p>
                        <div class="doctor-info">
                            <p> Dr. Larson<br>
                            (403) 520-8387<br>
                            info@carecentre.ca</p>
                            <a href="https://vcacanada.com/carecentre/services/oncology" target="_blank"  class="btn-transition btn-styles">Visit their site</a>
                        </div>
                    </div>
                    <div class="yellow-box">
                        <h3>The Western College of Veterinary Medicine (WCVM)</h3>
                        <h4>Saskatoon, SK</h4>
                        <p>With the assistance of ACTSS, WCVM developed western Canada’s first veterinary oncology center in 2003 when its veterinary oncologists Dr. Monique Mayers and Dr. Valerie MacDonald opened the doors to the new radiation vault and medical oncology treatment centre.</p>
                        <div class="doctor-info">
                            <p>The Western College of Veterinary Medicine<br>
                            (306) 966-7103</p>
                            <a href="petradtherapy.usask.ca" target="_blank"  class="btn-transition btn-styles">Visit their site</a>
                        </div>
                    </div>
                </div>  <!-- close oncology boxes -->
            </div> <!-- close oncology -->
        </div><!-- contain oncology close -->
    <div class="contain-cancer-types">
        <div class="cancer-types clearfix">
            <h2>Cancer Types</h2>
            <select name="cancer_types" id="cancer_types">
                <?php
                $args = array(  'numberposts' => -1,
                                'category_name' => 'cancer',
                                'orderby'			=> 'title',
                                'order' => 'ASC');
                $posts = get_posts($args);
                foreach( $posts as $post ) : setup_postdata($post); ?>
                            <option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
                <?php endforeach; ?>
            </select>
            <div class="col">
                <h4>Description</h4>
                    <div id="desc"></div>
                <h4>Diagnosis</h4>
                    <div id="diagnosis"></div>
                <h4>Treatment</h4>
                    <div id="treatment"></div>
            </div>
        </div> <!-- close cancer-types -->
    </div><!-- close contain cancer-types -->
    <div class="contain-support">
        <div class="support clearfix">

        <h2>Support</h2>
        
            <p>Losing a pet, or dealing with a recent diagnosis can be tough, but there are resources out there to help. Remember a Pet is a non-profit society that has resources and ways to memorialize your pet. </p>
            <a href="https://rememberapet.org/" target="_blank" class="btn-transition btn-styles">Remember a Pet</a>
        </div> <!-- close support -->
    </div><!-- close contain support -->
</div> <!-- close resources -->
</main>

<?php get_footer(); ?>

