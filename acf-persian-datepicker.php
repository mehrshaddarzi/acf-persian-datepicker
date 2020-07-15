<?php
/*
Plugin Name: Advanced Custom Fields: Persian-DatePicker
Plugin URI: https://realwp.net
Description: Use Persian DatePicker in ACF
Version: 1.0.0
Author: Mehrshad Darzi
Author URI: https://realwp.net
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

// check if class already exists
if( !class_exists('ACF_PERSIAN_DATEPICKER') ) :

class ACF_PERSIAN_DATEPICKER {
	var $settings;

	function __construct() {
		// settings
		$this->settings = array(
			'version'	=> '1.0.0',
			'url'		=> plugin_dir_url( __FILE__ ),
			'path'		=> plugin_dir_path( __FILE__ )
		);

		// include field
		add_action('acf/include_field_types', 	array($this, 'include_field'));
	}

	function include_field( $version = false ) {
		// load textdomain
		load_plugin_textdomain( 'acf-persian-datepicker', false, plugin_basename( dirname( __FILE__ ) ) . '/lang' );

		// include
		include_once('fields/acf-persian-datepicker.php');
	}
}

// initialize
new ACF_PERSIAN_DATEPICKER();

// class_exists check
endif;