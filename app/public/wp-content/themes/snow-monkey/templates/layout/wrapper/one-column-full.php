<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 6.0.0
 */

use Framework\Helper;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-sticky-footer="true" data-scrolled="false">
<?php Helper::get_template_part( 'vendor/inc2734/mimizuku-core/src/view/template-parts/head' ); ?>

<body <?php body_class( [ 'l-body--one-column-full' ] ); ?> id="body"
	data-has-sidebar="false"
	data-is-full-template="true"
	data-is-slim-width="false"
	>

	<?php wp_body_open(); ?>
	<?php do_action( 'snow_monkey_prepend_body' ); ?>

	<?php
	if ( has_nav_menu( 'drawer-nav' ) || has_nav_menu( 'drawer-sub-nav' ) ) {
		Helper::get_template_part( 'template-parts/nav/drawer' );
	}
	?>

	<div class="l-container">
		<?php Helper::get_header(); ?>

		<div class="l-contents" role="document">
			<?php do_action( 'snow_monkey_prepend_contents' ); ?>

			<?php
			if ( get_theme_mod( 'header-content' ) ) {
				Helper::get_template_part( 'template-parts/header/content', 'sm' );
			}
			?>

			<?php
			if ( get_theme_mod( 'infobar-content' ) ) {
				Helper::get_template_part( 'template-parts/common/infobar' );
			}
			?>

			<div class="c-full-container">
				<?php do_action( 'snow_monkey_before_contents_inner' ); ?>

				<div class="l-contents__inner">
					<main class="l-contents__main" role="main">
						<?php do_action( 'snow_monkey_prepend_main' ); ?>

						<?php $_view_controller->view(); ?>

						<?php do_action( 'snow_monkey_append_main' ); ?>
					</main>
				</div>

				<?php do_action( 'snow_monkey_after_contents_inner' ); ?>
			</div>

			<?php do_action( 'snow_monkey_append_contents' ); ?>
		</div>

		<?php Helper::get_footer(); ?>
	</div>

<?php wp_footer(); ?>
</body>
</html>
