<?php
/**
 * Template Name: Right sidebar
 * Template Post Type: post, page
 *
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 5.0.0
 */

use Framework\Controller\Controller;

Controller::layout( 'right-sidebar' );
if ( is_front_page() ) {
	Controller::render( 'front-page' );
} else {
	Controller::render( 'content', get_post_type() );
}
