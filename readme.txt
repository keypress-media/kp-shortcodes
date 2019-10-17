=== KeyPress Shortcodes ===

Author URI: https://getkeypress.com/
Plugin URI: https://github.com/keypress-media/kp-shortcodes
Contributors: Asier Moreno
Tags: multisite, waas, shortcodes
Requires at least: 4.4
Tested up to: 5.3
Stable tag: 5.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

Adds the following extra shortcodes to your multisite:

[kp_site_id]           : Site id
[kp_site_name]         : Site title (set in Settings > General)
[kp_site_tagline]      : Site tagline (set in Settings > General)
[kp_site_url]          : Site address (URL)
[kp_admin_email]       : Site admin email (set in Settings > General)
[kp_main_id]           : Main site id
[kp_main_name]         : Main site title (set in Settings > General)
[kp_main_tagline]      : Main site tagline (set in Settings > General)
[kp_main_url]          : Main site address (URL)
[kp_main_admin_email]  : Main site admin email (set in Settings > General)

All shortcodes support the default="" attribute, which will display a default text when the information the shortcode should display is not available.
For example, the shortcode [kp_site_tagline default="Tagline is empty"] will display the text "Tagline is empty" if the tagline field (Settings > General) is empty.

== Installation ==

1. Install and activate the plugin.
2. Now you can use the new shortcodes listed in the above plugin description.

== Changelog ==

= 1.0.0: October 17, 2019 =
* First version of the plugin.