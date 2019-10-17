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

[kp-site-id]           : Site id
[kp-site-name]         : Site title (set in Settings > General)
[kp-site-tagline]      : Site tagline (set in Settings > General)
[kp-site-url]          : Site address (URL)
[kp-admin-email]       : Site admin email (set in Settings > General)
[kp-main-id]           : Main site id
[kp-main-name]         : Main site title (set in Settings > General)
[kp-main-tagline]      : Main site tagline (set in Settings > General)
[kp-main-url]          : Main site address (URL)
[kp-main-admin-email]  : Main site admin email (set in Settings > General)

All shortcodes support the default="" attribute, which will display a default text when the information the shortcode should display is not available.
For example, the shortcode [kp-site-tagline default="Tagline is empty"] will display the text "Tagline is empty" if the tagline field (Settings > General) is empty.

== Installation ==

1. Install and activate the plugin.
2. Now you can use the new shortcodes listed in the above plugin description.

== Changelog ==

= 1.0.0: October 17, 2019 =
* First version of the plugin.