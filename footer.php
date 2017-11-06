<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


$calendar	= get_theme_mod('footer_text_cal_link', '/resources/calendar/');
$map	 	= get_theme_mod('footer_text_map_link', 'https://www.google.com/maps/place/231+N+Church+St,+Rocky+Mount,+NC+27804/@35.9458229,-77.7978464,17z');
$dio 		= get_theme_mod('footer_text_dio_link', 'http://www.dionc.org/');
$facebook	= get_theme_mod('footer_text_dio_link', 'https://www.facebook.com/Church-of-the-Good-Shepherd-Episcopal-Rocky-Mount-NC-246208660494/');
$email		= get_theme_mod('footer_text_email_link', 'https://visitor.r20.constantcontact.com/manage/optin?v=0013sqtWUZpMnGEoYXgaI4TjrWS8kwiVGsJyaaDpJuVzJUAGhvXxkn-FhoYVYjEZJa2iz0H_ypgScIPhr3vqO-31z9D-EOP9vDFKAeRqsEIJGfsonI2Mwwv8G4VV0vNvw5DDR3z3XnNDfXYR6_TspcweAIvnLS-zyryAOZKBN925LE%3D');

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<div class="row">
					<div class="columns large-4 medium-4 small-12 text-center">
						<div class="row">
							<div class="columns small-4">
								<a href="<?php echo $calendar ?>">
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
								</a>
							</div>
							<div class="columns small-4">
								<a href="<?php echo $map ?>" target="_blank">
									<i class="fa fa-map" aria-hidden="true"></i>
								</a>
							</div>
							<div class="columns small-4">
								<a href="<?php echo $dio ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri('/') ?>/assets/images/Episcopal-logo.png" />
								</a>
							</div>
						</div>
					</div>
					<div class="columns large-4 medium-4 small-12 text-center">
					</div>
					<div class="columns large-4 medium-4 small-12 text-center">
						<div class="row">
							<div class="columns small-4">
								<a href="<?php echo $facebook ?>" target="_blank">
									<i class="fa fa-facebook-square" aria-hidden="true"></i>
								</a>
							</div>
							<div class="columns small-4">
								<a href="/gift">
									<i class="fa fa-gift" aria-hidden="true"></i>
								</a>
							</div>
							<div class="columns small-4">
								<a href="<?php echo $email ?>" target="_blank">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row sub-footer">
					<div class="columns large-4 medium-4 small-12 text-center">
						<?php echo get_theme_mod('footer_text_address', '231 N. Church St, Rocky Mount, NC 27804'); ?>
						<br/>
						<a href="tel:2524421134" style="color:black">
						<?php echo get_theme_mod('footer_text_telephone', '252.442.1134'); ?>
						</a>
					</div>
					<div class="columns large-4 medium-4 small-12 text-center">
						<?php echo get_theme_mod('footer_text_1', '© Copyright 2016, Good Shepherd Episcopal Church. All rights reserved.'); ?>
					</div>
					<div class="columns large-4 medium-4 small-12 text-center">
						<?php echo get_theme_mod('footer_text_disclosure', 'The Church of the Good Shepherd and the Good Shepherd Day School are equal opportunity employers. The USDA is an equal opportunity provider and employer.'); ?>
					</div>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
