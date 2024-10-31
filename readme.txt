=== oik-read-more ===
Contributors: bobbingwide, vsgloik
Donate link: https://www.oik-plugins.com/oik/oik-donate/
Tags: shortcode, [bw_more], oik
Requires at least: 3.9
Tested up to: 6.6.2
Stable tag: 0.2.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Progressively reveal content by clicking on "read more" buttons.

== Description ==
Implements the [bw_more] shortcode to progressively reveal content by clicking on "read more" buttons.

* Type the [bw_more] shortcode into your content at the point from where you want to hide the remaining content.
* When the content is displayed the shortcode is replaced by a 'read more' button.
* The user reveals the remaining content by clicking on the 'read more' button.

Choose the text to be displayed in the button using

[bw_more "my read more text"]



== Frequently Asked Questions ==

= Installation =
1. Upload the contents of the oik-read-more plugin to the `/wp-content/plugins/oik-read-more' directory
1. Activate the oik-read-more plugin through the 'Plugins' menu in WordPress

Note: You will also need the oik base plugin, version 3.1 or higher.

= Is it dependent upon oik? =
Yes. It depends on the oik base plugin.

= What is the syntax of the [bw_more] shortcode? =

[bw_more
 read_more="read more|text - Text for read more button"
 class="|CSS class - CSS class name(s)"]
 
 
Note: You do not need to use the read_more= parameter name

= How do I style the 'read more' button? =

Use custom CSS to style the 'read more' text.

= Further reading =
If you want to read more about the oik plugins then please visit the
[oik plugin](https://www.oik-plugins.com/oik) 
**"the oik plugin - for often included key-information"**


== Screenshots ==
1. oik-read-more in action
2. result after 'read more' clicked

== Upgrade Notice ==
= 0.2.6 =
Upgrade for support for PHP 8.3.


== Changelog ==
= 0.2.6 =
* Changed: Support PHP 8.3 #5
* Fixed: Only respond to oik_add_shortcodes after oik_loaded #6
* Tested: With WordPress 6.5-RC3 and WordPress Multisite
* Tested: With PHP 8.3
* Tested: With PHPUnit 9.6