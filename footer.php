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

<div class="footer">
	<div class="footer__container expanded row align-middle">
		<div class="footer__logo column medium-3 small-12"><a href="#"><img class="footer__logo__image" src="<?php bloginfo('template_url') ?>/src/assets/images/logo_footer.svg" height="auto" width="120" alt="logo Dickytall"></a></div>
		<div class="footer__copyright column medium-6 small-12">
			© 2017 Dickytall & Sons.</br>
			Because we only have daughters and they don't mind.
		</div>
		<div class="footer__social column medium-3 small-12">
			<div class="row align-right footer__social__position">
				<a class="footer__social__icons" href="https://www.facebook.com/dickytall/" target="_blank"><img src="<?php bloginfo('template_url') ?>/src/assets/images/facebook.svg"  width="30" alt="facebook"></a>
				<a class="footer__social__icons" href="https://www.facebook.com/dickytall/" target="_blank"><img src="<?php bloginfo('template_url') ?>/src/assets/images/instagram.svg"  width="30" alt="instagram"></a>
				<a class="footer__social__icons" href="https://www.facebook.com/dickytall/" target="_blank"><img src="<?php bloginfo('template_url') ?>/src/assets/images/linkedin.svg" width="30" alt="linkedin"></a>
			</div>
		</div>
	</div>
</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
