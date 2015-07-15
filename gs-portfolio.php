<?php
/**
 *
 * @package   GS_Portfolio
 * @author    Golam Samdani <samdani1997@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.gsamdani.me
 * @copyright 2014 Golam Samdani
 *
 * @wordpress-plugin
 * Plugin Name:			GS Portfolio
 * Plugin URI:			http://www.gsamdani.me/wordpress-plugins
 * Description:       	Best Responsive Portfolio plugin for your Wordpress site. Display anywhere at your site using shortcode like [gs_portfolio] Check more shortcode examples and documention at <a href="http://portfolio.gsamdani.me">GS Portfolio Docs</a> 
 * Version:           	1.0.0
 * Author:       		Golam Samdani
 * Author URI:       	http://www.gsamdani.me
 * Text Domain:       	gsportfolio
 * License:           	GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


//--------- CPT Logo ----------------------- 
require_once dirname( __FILE__ ) . '/includes/gs-portfolio-cpt.php';


//--------- CPT's MetaBox ------------------ 
require_once dirname( __FILE__ ) . '/includes/gs-portfolio-metabox.php';


//--------- CPT's Columns ------------------ 
require_once dirname( __FILE__ ) . '/includes/gs-portfolio-column.php';


//--------- CPT's Shortcode ---------------- 
require_once dirname( __FILE__ ) . '/includes/gs-portfolio-shortcode.php';


//--------- Img Resizer by aq_resizer ------ 
require_once dirname( __FILE__ ) . '/includes/aq_resizer.php';


//--------- Enqueue Scripts & Style Files --
require_once dirname( __FILE__ ) . '/gs-portfolio-script.php';


//--------- GS Addons List -------------------
require_once dirname( __FILE__ ) . '/addons/gs-addons-list.php';


add_action('do_meta_boxes', 'gs_pf_fea_img_box');
function gs_pf_fea_img_box()
{
    remove_meta_box( 'postimagediv', 'gs-portfolio', 'side' );
    add_meta_box('postimagediv', __('Portfolio Image'), 'post_thumbnail_meta_box', 'gs-portfolio', 'side', 'low');
}


//--------- Add plugin action links ---------------- 

add_filter( 'plugin_action_links', 'gs_portfolio_add_action_plugin', 10, 5 );

function gs_portfolio_add_action_plugin( $actions, $gsp_plugin_file ) 
{
	static $gsp_plugin;

	if (!isset($gsp_plugin))
		$gsp_plugin = plugin_basename(__FILE__);

		$admin_link = admin_url();
	
	if ($gsp_plugin == $gsp_plugin_file) {

			$settings = array('settings' => '<a href="'. $admin_link .'edit.php?post_type=gs-portfolio">' . __('Portfolio', 'General') . '</a>');
			$site_link = array('support' => '<a href="http://www.gsamdani.me/support" target="_blank">Support</a>');
			$more_plugin = array('more' => '<a href="http://www.gsamdani.me/wordpress-plugins/" target="_blank">More Plugings</a>');
		
    			$actions = array_merge($settings, $actions);
				$actions = array_merge($site_link, $actions);
				//$actions = array_merge($more_plugin, $actions);	
		}	
		return $actions;
}