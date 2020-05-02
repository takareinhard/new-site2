<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 6.0.0
 */

use Framework\Helper;
?>

<footer class="l-footer" role="contentinfo">
	<?php do_action( 'snow_monkey_prepend_footer' ); ?>

	<?php
	if ( has_nav_menu( 'social-nav' ) ) {
		Helper::get_template_part( 'template-parts/nav/social' );
	}
	?>

	<?php
	if ( Helper::is_active_sidebar( 'footer-widget-area' ) ) {
		Helper::get_template_part( 'template-parts/widget-area/footer' );
	}
	?>

	<?php
	if ( has_nav_menu( 'footer-sub-nav' ) ) {
		Helper::get_template_part( 'template-parts/nav/footer-sub' );
	}
	?>

	<?php
	if ( Helper::get_copyright() ) {
		Helper::get_template_part( 'template-parts/footer/copyright' );
	}
	?>

	<?php do_action( 'snow_monkey_append_footer' ); ?>
</footer>

<?php
if ( get_theme_mod( 'display-page-top' ) ) {
	Helper::get_template_part( 'template-parts/common/page-top' );
}
?>

<?php Helper::get_template_part( 'template-parts/nav/footer-sticky' ); ?>
