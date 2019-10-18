<?php

/**
 * This file defines the core plugin class.
 *
 * @link       https://getkeypress.com
 * @since      1.0.0
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

if ( ! class_exists( 'KP_Shortcodes' ) ) {

	class KP_Shortcodes {

		/**
		 * Starts plugin execution.
		 *
		 * @since    1.0.0
		 */
		public static function init() {

			$plugin = new self();

			$plugin->load_plugin_text_domain();

			if ( ! is_multisite() ) {
				add_action( 'admin_notices',  array( $plugin, 'render_not_multisite_admin_notice' ) );
				return;
			}

			$plugin->register_hooks();
		}

		/**
		 * Registers the plugin hooks.
		 *
		 * @since    1.0.0
		 */
		public function register_hooks() {
			add_action( 'init', array( $this, 'register_shortcodes' ) );
		}

		/**
		 * Registers the shortcodes.
		 *
		 * @since    1.0.0
		 */
		public function register_shortcodes() {

			$shortcodes = array(
				'kp_site_id',
				'kp_site_name',
				'kp_site_tagline',
				'kp_site_url',
				'kp_admin_email',
				'kp_main_id',
				'kp_main_name',
				'kp_main_tagline',
				'kp_main_url',
				'kp_main_admin_email'
			);

			foreach ( $shortcodes as $shortcode_tag ) {
				add_shortcode( $shortcode_tag, function( $atts ) use( $shortcode_tag ) {
					return $this->get_shortcode_text( $shortcode_tag, $atts );
				} );
			}
		}

		/**
		 * Returns the text that is to be used to replace the shortcode.
		 *
		 * @since    1.0.0
		 *
		 * @param $shortcode_tag Shortcode tag to be searched in post content.
		 * @param $atts The shortcode attributes.
		 *
		 * @return string
		 */
		public function get_shortcode_text( $shortcode_tag, $atts ) {
			$text = isset( $atts['default'] ) ? $atts['default'] : '';

			switch( $shortcode_tag ) {
				case 'kp_site_id':
					$current_site = get_site( get_current_blog_id() );
					$text = $current_site->__get( 'id' );
					break;
				case 'kp_site_name':
					$text = get_bloginfo( 'name' );
					break;
				case 'kp_site_tagline':
					$text = get_bloginfo( 'description' );
					break;
				case 'kp_site_url':
					$text = get_bloginfo( 'url' );
					break;
				case 'kp_admin_email':
					$text = get_bloginfo( 'admin_email' );
					break;
				case 'kp_main_id':
					$text = get_main_site_id();
					break;
				case 'kp_main_name':
					$text = $this->get_main_site_info( 'name' );
					break;

				case 'kp_main_tagline':
					$text = $this->get_main_site_info( 'description' );
					break;

				case 'kp_main_url':
					$text = network_site_url( '/' );
					break;
				case 'kp_main_admin_email':
					$text = $this->get_main_site_info( 'admin_email' );
					break;
			}

			return $text;
		}

		/**
		 * Loads the plugin text domain for translation.
		 *
		 * @since    1.0.0
		 */
		public function load_plugin_text_domain() {

			load_plugin_textdomain(
				'kp-shortcodes',
				false,
				KP_SHORTCODES_PLUGIN_DIR . '/languages/'
			);

		}

		/**
		 * Renders an admin notice warning that the plugin is only compatible with multisite installations.
		 *
		 * @since    1.0.0
		 */
		public function render_not_multisite_admin_notice() {
			$message = __( 'This version of KP Shortcodes plugin only works on <em>Wordpress Multisite</em> installs.', 'kp-shortcodes' );
			$this->render_admin_notice( $message );
		}

		/**
		 * Renders an admin notice.
		 *
		 * @since    1.0.0
		 *
		 * @param $message The message to be rendered.
		 */
		private function render_admin_notice( $message ) {
			$html = '<div class="notice notice-error is-dismissible">';
			$html .= '<p>' . $message . '</p>';
			$html .= '</div>';
			echo $html;
		}

		/**
		 * Retrieves information about the main site.
		 *
		 * @since    1.0.0
		 *
		 * @param string $show Site info to retrieve. Default empty (site name).
		 *
		 * @return string
		 */
		private function get_main_site_info( $show = '' ) {
			$is_main_site = is_main_site() ? true : false;

			if ( ! $is_main_site ) {
				switch_to_blog( get_main_site_id() );
			}

			$info = get_bloginfo( $show );

			if ( ! $is_main_site ) {
				restore_current_blog();
			}

			return $info;
		}
	}

	KP_Shortcodes::init();

}