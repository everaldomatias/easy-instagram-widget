<?php
/**
 * Plugin Name: Easy Instagram Widget
 * Plugin URI: http://github.com/everaldomatias/easy-instagram-widget
 * Description: Gateway de pagamento PagSeguro para WooCommerce.
 * Author: Everaldo Matias
 * Author URI: http://everaldomatias.wordpress.com/
 * Version: 0.0.1
 * License: GPLv2 or later
 * Text Domain: eiw
 * Domain Path: languages/
 *
 * @package Easy_Instagram_Widget
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'Easy_Instagram_Widget' ) ) :
	/**
	 * Easy Instagram Widget main class.
	 */
	class Easy_Instagram_Widget {

		/**
		 * Plugin version.
		 *
		 * @var string
		 */
		const VERSION = '0.0.1';

		/**
		 * Load files of the translate.
		 *
		 * @return void
		 */
		function eiw_load_textdomain() {
			load_plugin_textdomain( 'eiw', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		}
		add_action( 'plugins_loaded', 'eiw_load_textdomain' );
	}
endif;