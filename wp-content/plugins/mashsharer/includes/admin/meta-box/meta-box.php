<?php
/**
 * Plugin Name: Meta Box
 * Plugin URI: https://metabox.io
 * Description: Create custom meta boxes and custom fields for any post type in WordPress.
 * Version: 4.8.4
 * Author: Rilwis
 * Author URI: http://www.deluxeblogtips.com
 * License: GPL2+
 * Text Domain: meta-box
 * Domain Path: /lang/
 */

if ( defined( 'ABSPATH' ) && ! class_exists( 'MASHSB_RWMB_Loader' ) )
{
	require plugin_dir_path( __FILE__ ) . 'inc/loader.php';
	new MASHSB_RWMB_Loader;
}
