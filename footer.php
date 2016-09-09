<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<div class="row">
					<div class="columns large-4 medium-4 small-12 text-center">
						<div class="row">
							<div class="columns small-4">
								<i class="fa fa-calendar-o" aria-hidden="true"></i>
							</div>
							<div class="columns small-4">
								<i class="fa fa-map" aria-hidden="true"></i>
							</div>
							<div class="columns small-4">
								<img src="<?php echo get_template_directory_uri('/') ?>/assets/images/Episcopal-logo.png" />
							</div>
						</div>
					</div>
					<div class="columns large-4 medium-4 small-12 text-center">
					</div>
					<div class="columns large-4 medium-4 small-12 text-center">
						<div class="row">
							<div class="columns small-4">
								<i class="fa fa-facebook-square" aria-hidden="true"></i>
							</div>
							<div class="columns small-4">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div>
							<div class="columns small-4">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="row sub-footer">
					<div class="columns large-4 medium-4 small-12 text-center">
						<?php echo get_theme_mod('footer_text_address', '231 N. Church St, Rocky Mount, NC 27804'); ?>
						<br/>
						<?php echo get_theme_mod('footer_text_telephone', '252.442.1134'); ?>
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
