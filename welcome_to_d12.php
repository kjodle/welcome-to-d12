<?php
/**
 * @package Welcome_to_d12
 * @version 1.0
 */
/*
Plugin Name: Welcome to d12 Web Design
Plugin URI: http://d12webdesign.com/blog/
Description: This plugin adds useful links to the top of a Wordpress admin page. 
Author: Kenneth John Odle
Version: 1.0
Author URI: http://d12webdesign.com/
*/

function d12welcome() {
	echo '<div id="d12welcome">

	<p class="first">Thank you for choosing <a href="http://d12webdesign.com/" target="blank">d12 Web Design & Development</a></p>

	<p><em>Need help?</em> Visit our <a href="http://d12webdesign.com/manuals/" target="blank">Manuals</a> &bull; <a href="http://manuals.d12webdesign.com/Category:WordPress" target="_blank">WordPress Manual</a> &bull; <a href="http://manuals.d12webdesign.com/WordPress_FAQ" target="_blank">WordPress FAQ</a> &bull; <a href="http://d12webdesign.com/blog/" target="blank">d12 Blog (for news about updates)</a> &bull; <a href="http://d12webdesign.com/support" target="_blank">Support</a></p>

	</div>';
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'd12welcome' );

// Enqueue our back end style sheet 
function d12_styles() {
	wp_enqueue_style( 'd12-screenstyle', plugins_url( '/css/welcometod12.css', __FILE__, '1.0', 'screen' ) );
}
add_action( 'admin_enqueue_scripts', 'd12_styles' );


// Include our update script to update from private repo
require 'update/puc.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'http://api.kjodle.net/?action=get_metadata&slug=welcome-to-d12',
	__FILE__,
	'welcome-to-d12'
);

