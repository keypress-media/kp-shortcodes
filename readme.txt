=== Customize WP UI ===
Author URI: https://getkeypress.com/
Plugin URI: https://getkeypress.com/downloads/kp-admin-ui
Contributors: Asier Moreno
Tags: multisite, ui, admin, user interface, waas, ui/ux, user experience, customize, dashboard
Requires at least: 4.4
Tested up to: 5.2.2
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

Finally you can have full control over all of the UI elements in your WordPress Multisite environment. Reorder, rename, hide, and create new items globally or based on user roles and much more!


== Installation ==

1. Activate the plugin
2. Go to (Network Admin) UI Manager > Settings and check the modules you want to activate
3. Create customized Views according to your Rules for all the WP menus.

== Changelog ==

= 0.1.0: March 8, 2018 =
* Keypress UI is born. This is a first pre-alpha release only available for the plugin's founding members.
* Provides the basic file structure and implements the license management system by EDD Software Licensing.

= 0.1.1: March 18, 2018 =
* Fix: Error while network activating reported by Nate Hoffelder and Jen Reed.

= 0.9.1.0: December, 6, 2018 =

* Added Admin Menu Module

= 0.9.1.6: December, 24, 2018 =

* Added Toolbar Module
* Added ability to create a new item (Regular item / Heading / Separator )
* Added ability to edit item link (Custom / WP Admin pages)
* Added ability to remove icon by selecting the blank square on the icons popup
* Added the ability to add a custom css class
* Added built-in background-color classes: kpui-green, kpui-orange, kpui-red, kpui-blue
* Added the ability to reset menu to default configuration
* Added ability to insert html tags in the menu label field including span, em, and strong and the class and style attributes
* Improved error messages and info notifications
* Includes many small bug fixes

= 0.9.2.2: February, 1, 2019 =

* Added Customizer Module with limited features
* Added ability to edit item link (Custom / WP Admin pages)
* Menus loaded with Ajax to avoid the request timeout message
* Added the ability to hide/show items by clicking an eye icon instead of checking a checkbox.
* Added the ability to edit items titles in-line.
* Added a checkbox to select/deselect all the options of a rule
* Includes many small bug fixes
* Added new built-in css classes
* Added new built-in css class kpui-bg-colorname which  changes the background color. ‘colorname’ is the name of any of the colors listed here: http://thenewcode.com/1111/Using-CSS-Color-Keywords
* Added new built-in css class kpui-color-colorname which changes the text color. ‘colorname’ is the name of any of the colors listed here: http://thenewcode.com/1111/Using-CSS-Color-Keywords

= 0.9.5.1: March, 18, 2019 =

* Added single site compatibility
* Added the ability to use built-in shortcodes in toolbar items: {{site-name}}, {{updates-number}}, {{comments-number}}, {{post-type}}, {{display-name}}, {{avatar}}
* Added built-in css class for separators
* Includes many small bug fixes

= 0.9.6.4: June, 12, 2019 =

* Added the ability to separately edit admin menu and toolbar for subsite, main site and network site
* Added the ability to duplicate views
* Added the ability to set a menu item as global
* Many bug fixes
* Some minor UI changes including additional tooltips and descriptive text

= 0.9.6.5: June, 13, 2019 =

* Fixed admin menu separators bug
* Fixed PHP Parse error on class-kpui-toolbar.php

= 0.9.6.7: June, 14, 2019 =

* Fixed Site Name bug on class-kpui-toolbar.php

= 0.9.6.9: June, 21, 2019 =

* Fixed bugs:
  - Duplicate Beaver Builder and Wallace Inline items when editing the toolbar.
  - Not redirecting to the selected toolbar area when saving a toolbar view.

= 0.9.7.0: June, 25, 2019 =

* Fixed bugs in the toolbar module:
  - Sometimes items were not rearranged correctly.
  - Changes in subitems under site-name were not applied.
  - Wallace Inline icon disappeared when item was renamed.

= 0.9.7.1: July, 16, 2019 =
* Added an Advanced Settings area to the Admin Menu module. This area allows you to adjust different parameters to see how the menu will appear in different situations.
* Added the ability to use shortcodes in the Admin Menu and Toolbar modules. Scroll to the bottom of the menu edit screen to see all available shortcodes.
* Fixed bug: Admin Menu subitems were not renamed correctly when the item was moved to a different submenu.

= 0.9.7.2: July, 17, 2019 =
* Fixed bugs:
  - Admin Menu: New Headings always appeared at the bottom.
  - Admin menu: Items with blank icons displayed the original icon instead of a blank space.
  - Global options were not removed when all the views were deleted.

= 0.9.7.3: July, 19, 2019 =
  * Added a CSS and a JavaScript editor in a new module named "Branding".

= 0.9.7.5: August, 20, 2019 =
  * Menu items that are marked as hidden will appear lighter in color to distinguish them from visible menu items.
  * Added the filter “kpui_shortcodes” for creating custom in-line shortcodes to display dynamic content in menu items.
  * Added the ability to add a logout item in the Toolbar and Admin Menu modules.
  * Fixed escaped quotes issue. Now single quotes can be used in view names and item titles.
  * Added the ability to hide the "Collapse menu" button and/or display the menu collabsed by default on the Admin Menu.
  * Fixed bugs in the Customizer module:
        - "Widgets" and "Menus" couldn't be hidden when OceanWP the was active.
        - Some sections and panels didn't appear due to priority collisions.
  * Fixed bug in the Admin menu module: When a submenu item was moved under a different parent item, both the new parent and the old one were highlighted when visiting the submenu item.

= 0.9.7.7: September, 4, 2019 =
  * Fixed bugs:
    - Customizer module: For the Astra theme, the customizer menu was not generated correctly. Some panels and sections appeared as top level items when they should be subitems.
    - License couldn't be deactivated.

= 0.9.7.9: September, 26, 2019 =
  * Fixed bugs in the Toolbar module:
    - When making changes to a view, if the area was switched from backend to frontend and vice versa, some of those changes were not saved.
    - The Search form couldn't be hidden.
    - Shortcode {{post-type}} wasn't working.
    - Priority collisions weren't handled correctly when switching areas.

= 0.9.8.0: September, 28, 2019 =
  * Added the ability to edit toolbar items independently in frontend and backend areas.

== Special Thanks ==

Special thanks to our founding members:

Aaron Bradshaw
Anchen Le Roux
Andy Gosling
Ben Magrill
Boel Stoddard
Brian Fuller
Eric PastoreK
Gareth Bissland
Gibran Garcia
Grant Kantsios
Jaime Skalante
James Ryan
Jan-Riekus Jansen
Jason Westbrook
Jen Reed
Jeremy Brown
Jonathan Power
Josh Rohrback
Julie Dulong
Karin Conroy
Kyle Schmitt
Les Dow
Lisa Erez
Lori Berkowitz
Lori and Sam Newman
Luke Hewlett
Mario González
Mark Gibson
Martin Coombes
Morgan Tuttle
Nate Hoffelder
Philip Martin
Phill Coxon
Robert Simmons
Scott Thomas
Shane Rielly
Tony Phelps
Waylan Loyd
