<?php 
/* ===================================
Plugin Name:       Ultimate Social Share Buttons
Plugin URI:	       http://habibcoder.com/socialshare
Author:            HabibCoder
Author URI:        http://habibcoder.com
Version:           2.0.0
Tested up to:      6.6
Requires at least: 6.0
Require PHP: 7.0
License: General Public License v-2.0 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: ultimate social share buttons, social share button, social media share button, social media, social media share
Description: The Ultimate Social Share Buttons is a most useful Social Media Share Plugin for your blog page and single page. It is a unique social share plugin.
Text Domain: ultimate-social-share-buttons
=================================== */

// ABSPATH Defined
if(! defined('ABSPATH')){
    exit('not valid');
}

/* ==========================
	Register Text Domain
========================== */
add_action('plugins_loaded', 'ussb_load_textdomain');
function ussb_load_textdomain(){
    load_plugin_textdomain('ultimate-social-share-buttons', false, dirname(plugin_basename( __FILE__ ) ) . '/languages');
}

/* ==================================================
	Get Plugin Directory & URL and Define Constant
================================================== */
//Get plugin Dir & Url
$ussb_dir = plugin_dir_path( __FILE__ ); 
$ussb_url = plugin_dir_url( __FILE__ );

//Define Dir & Url as a Constants
define( 'USSB_PLUGIN_DIR', $ussb_dir );
define( 'USSB_PLUGIN_URL', $ussb_url );
define( 'USSB_TEXT_DOMAIN', 'ultimate-social-share-buttons');

/* ==========================
	Requires File
========================== */
// Dashboard Require
$ssbutton_admin_dir = USSB_PLUGIN_DIR .'includes/ssbutton-admin.php';
if(file_exists( $ssbutton_admin_dir )){
	require_once( $ssbutton_admin_dir );
}
// Frontend
$ssbutton_frontend_dir = USSB_PLUGIN_DIR .'views/ssbutton-view.php';
if(file_exists( $ssbutton_frontend_dir )){
	require_once( $ssbutton_frontend_dir );
}

/* ============================
	Enqueue in Admin Panel
============================ */
add_action('admin_enqueue_scripts', 'ussb_admin_enqueues');
function ussb_admin_enqueues(){
    // Scripts
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('ultimate-social-share-buttons-scripts', PLUGINS_URL('js/ssb-admin.js', __FILE__), ['jquery'], '1.0.0', true);
    // Style
	wp_enqueue_style('ultimate-social-share-buttons-style', PLUGINS_URL('css/ssb-admin.css', __FILE__), [], '1.0.0', 'all');
}


/* ============================
	Enqueue in Frontend
============================ */
add_action('wp_enqueue_scripts', 'ussb_frontend_enqueues');
function ussb_frontend_enqueues(){
    wp_enqueue_style('ultimate-social-share-buttons-style', PLUGINS_URL('css/ssb-view.css', __FILE__), [], '1.0.0', 'all');
}


/* ==========================
	Redirect to plugin
========================== */
register_activation_hook( __FILE__, 'ussb_plugin_activation' );
function ussb_plugin_activation(){
    add_option('ussb_plugin_do_activate', true);
}

add_action('admin_init', 'ussb_plugin_redirect');
function ussb_plugin_redirect(){
    if (is_admin() && get_option('ussb_plugin_do_activate', false)) {
        delete_option('ussb_plugin_do_activate');

        if (!isset($_GET['active_multi'])) {
            wp_safe_redirect( admin_url('admin.php?page=ultimate-social-share-buttons') );
            exit;
        }

    }
};