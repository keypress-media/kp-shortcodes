<?php

/**
 * This file defines the core plugin class.
 *
 * @link       https://getkeypress.com
 * @since      1.0.0
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
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
				'kp-site-id',
				'kp-site-name',
				'kp-site-tagline',
				'kp-site-url',
				'kp-admin-email',
				'kp-main-id',
				'kp-main-name',
				'kp-main-tagline',
				'kp-main-url',
				'kp-main-admin-email'
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
				case 'kp-site-id':
					$current_site = get_site( get_current_blog_id() );
					$text = $current_site->__get( 'id' );
					break;
				case 'kp-site-name':
					$text = get_bloginfo( 'name' );
					break;
				case 'kp-site-tagline':
					$text = get_bloginfo( 'description' );
					break;
				case 'kp-site-url':
					$text = get_bloginfo( 'url' );
					break;
				case 'kp-admin-email':
					$text = get_bloginfo( 'admin_email' );
					break;
				case 'kp-main-id':
					$text = get_main_site_id();
					break;
				case 'kp-main-name':
					$text = $this->get_main_site_info( 'name' );
					break;

				case 'kp-main-tagline':
					$text = $this->get_main_site_info( 'description' );
					break;

				case 'kp-main-url':
					$text = network_site_url( '/' );
					break;
				case 'kp-main-admin-email':
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
				KP_SHORTCODES_PLUGIN_FILE . '/languages/'
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