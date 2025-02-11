<?php
/*
Plugin Name: oik-read-more
Plugin URI: https://www.oik-plugins.com/oik-plugins/oik-read-progressively-reveal-content/
Description: Implements [bw_more] shortcode to progressively reveal content
Version: 0.2.6
Author: bobbingwide
Author URI: https://bobbingwide.com/about-bobbing-wide
Text Domain: oik-read-more
Domain Path: /languages/
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

    Copyright 2014-2024 Bobbing Wide (email : herb@bobbingwide.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/
oik_rm_plugin_loaded();

/**
 * Implement "oik_add_shortcodes" action for oik-read-more
 */
function oik_rm_init() {
  bw_add_shortcode( "bw_more", "oik_rm", oik_path( "shortcodes/oik-read-more.php", "oik-read-more" ), false );
}

function oik_rm_oik_loaded() {
	add_action( "oik_add_shortcodes", "oik_rm_init" );
}

/**
 * Implement "admin_notices" for oik-read-more to check plugin dependency
 */ 
function oik_rm_activation() {
  static $plugin_basename = null;
  if ( !$plugin_basename ) {
    $plugin_basename = plugin_basename(__FILE__);
    add_action( "after_plugin_row_oik-read-more/oik-read-more.php", "oik_rm_activation" );   
    if ( !function_exists( "oik_plugin_lazy_activation" ) ) { 
      require_once( "admin/oik-activation.php" );
    }
  }  
  $depends = "oik:3.1";
  oik_plugin_lazy_activation( __FILE__, $depends, "oik_plugin_plugin_inactive" );
}

/**
 * Function to run when the plugin file is loaded 
 */
function oik_rm_plugin_loaded() {
  add_action( "admin_notices", "oik_rm_activation" );
  add_action( "oik_loaded", "oik_rm_oik_loaded" );
}