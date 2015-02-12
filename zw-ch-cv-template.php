<?php
/**
 * Paul's CV Template
 *
 * @package   Zw_Ch_CV_Template
 * @author    Paul Craig <paul@pcraig3.ca>
 * @license   GPL-2.0+
 * @copyright 2014
 *
 * @wordpress-plugin
 * Plugin Name:       Zw Ch CV Template
 * Plugin URI:        https://github.com/pcraig3/zw-ch-cv-template
 * Description:       creates a 'CV' page template for Paul Craig.  Only works under very specific conditions
 * Version:           1.1.2
 * Author:            Paul Craig
 * Author URI:        https://profiles.wordpress.org/pcraig3/
 * Text Domain:       zw-ch-cv
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/pcraig3/zw-ch-cv-template
 * GitHub Branch:     master
 */


/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/
require_once( plugin_dir_path( __FILE__ ) . 'PageTemplateAdder.php');

/*
 * @see : http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme
 *
add_action( 'wp_enqueue_scripts', 'zw_ch_cv_enqueue_styles' );

function zw_ch_cv_enqueue_styles() {
    wp_enqueue_style( 'zw-ch-cv-style', plugins_url( 'style.css', __FILE__ ), array());
}
*/