<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="footer">

	<div class="footer-container">
	
		<img class="logo" src="http://actssa.web.dmitcapstone.ca/wp-content/uploads/2018/03/ACTSS-LOGO.svg" alt="ACTSS LOGO"/>
		<ul class="social">
			<li>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</li>
			<li>
				<a href="#"><i class="fab fa-facebook-square"></i></a>
			</li>
			<li>
				<a href="#"><i class="fab fa-twitter-square"></i></a>
			</li>
		</ul>
		<div class="address footer-text">
			<p>Animal Cancer Therapy Subsidization Society (ACTSS)</p>
			<p>Box 68244 Bonnie Doon RPO Edmonton, AB T6C 4N6</p>
		</div>
		<div class="crn footer-text">
			<p>Charitable Registration Number: 88330 0626 RR0001</p>
		</div>
		<div class="copyright footer-text">
			<p><i class="far fa-copyright"></i> ACTSS <?php echo date("Y"); ?></p>
		</div>
		<div class="privacy footer-text"><a href="privacy-policy">Privacy Policy and Terms of Use</a></div>
		
	</div><!-- footer container end -->

</div><!-- footer end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

