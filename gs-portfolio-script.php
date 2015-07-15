<?php
//-------------- Enqueue Latest jQuery------------
function gs_portfolio_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'gs_portfolio_jquery');

//-------------- Include js files---------------
function gs_portfolio_enq_scripts() {
	if (!is_admin()) {
		wp_register_script('gsp-magnific-pop', plugins_url('js/jquery.magnific-popup.min.js', __FILE__),array('jquery'),'1.0.0', true);
		
		wp_enqueue_script('gsp-magnific-pop');
	}
}
add_action( 'wp_enqueue_scripts', 'gs_portfolio_enq_scripts' ); 

//------------ Include css files-----------------
function gs_portfolio_adding_style() {
	if (!is_admin()) {
		wp_register_style('gsp-bootstrap', plugins_url('css/gsp-custom-bootstrap.css', __FILE__),'','3.3.1', false);
		wp_register_style('gsp-hover-effects', plugins_url('css/gsp-hover-effects.css', __FILE__),'','1.0.0', false);
		wp_register_style('gsp-font-awesome', plugins_url('addons/css/font-awesome.min.css', __FILE__),'','4.2.0', false);
		wp_register_style('gsp-magnific-pop', plugins_url('css/gsp-magnific-popup.css', __FILE__),'','1.0.0', false);
		wp_register_style('gsp-style', plugins_url('css/gsp-style.css', __FILE__),'','1.0.0', false);
				
		wp_enqueue_style('gsp-bootstrap');
		wp_enqueue_style('gsp-hover-effects');
		wp_enqueue_style('gsp-font-awesome');
		wp_enqueue_style('gsp-magnific-pop');
		wp_enqueue_style('gsp-style');	
	}
}
add_action( 'init', 'gs_portfolio_adding_style' );

//------------ Include Admin css files-----------------

function enqueue_gs_portfolio_admin_style($screen){

	$gsp_s_post_type = $screen->post_type;
	
	if($gsp_s_post_type == 'gs-portfolio'){

		function gs_add_ons_list() {
			wp_register_style( 'gsp-admin-fa', plugins_url( '/addons/css/font-awesome.min.css', __FILE__ ),'', '4.2.0', false );	
			wp_register_style( 'gsp-admin-bootstrap', plugins_url( '/css/gsp-custom-bootstrap.css', __FILE__ ),'', '3.3.1', false );

			wp_enqueue_style( 'gsp-admin-fa' );
	        wp_enqueue_style( 'gsp-admin-bootstrap' );
		} 
	}

	add_action('admin_enqueue_scripts', 'gs_add_ons_list' );
}

add_action('current_screen', 'enqueue_gs_portfolio_admin_style');
