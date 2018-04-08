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
    <div class="resources">
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
                            <p>Dr. Neal Mauldin</p>
                            <p>(403) 770-1340</p>
                            <p> oncology@westernvet.ca</p>
                            <a href="#">Visit their site!</a>
                        </div>
                    </div>
                    <div class="yellow-box">
                        <h3>The Calgary Animal Referral and Emergency Centre (CARE)</h3>
                        <h4>Calgary, AB</h4>
                        <p> The Calgary Animal Refferal and Emergy Centre (CARE) based out of Calgary, AB has board certified medical oncologist Dr. Victoria Larson who  is heading up its oncology centre. They provide veterinary oncology care for Alberta pets.</p>
                        <div class="doctor-info">
                            <p> Dr. Larson</p>
                            <p>(403) 520-8387</p>
                            <p>info@carecentre.ca</p>
                            <a href="#">Visit their site!</a>
                        </div>
                    </div>
                    <div class="yellow-box">
                        <h3>The Western College of Veterinary Medicine (WCVM)</h3>
                        <h4>Saskatoon, SK</h4>
                        <p>With the assistance of ACTSS, WCVM developed western Canada’s first veterinary oncology center in 2003 when its veterinary oncologists Dr. Monique Mayers and Dr. Valerie MacDonald opened the doors to the new radiation vault and medical oncology treatment centre.</p>
                        <div class="doctor-info">
                            <p>The Western College of Veterinary Medicine</p>
                            <p>(306) 966-7103</p>
                            <a href="#">Visit their site!</a>
                        </div>
                    </div>
                </div>  <!-- close oncology boxes -->
            </div> <!-- close oncology -->
        </div><!-- contain oncology close -->
    </div> <!-- close resources -->
</main>

<?php get_footer(); ?>

