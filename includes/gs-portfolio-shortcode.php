<?php 
/* ==========================================================================
   Magnific Popup Trigger
   ========================================================================== */

function gs_p_magnific_popup(){ ?>
	<script type="text/javascript">
		jQuery(function(){

			jQuery('.gs_p_portfolio').magnificPopup({
				type:'inline',
				midClick: true,
				gallery:{
					enabled:true
				},
				delegate: 'a.gs_p_pop',
				removalDelay: 500, //delay removal by X to allow out-animation
				callbacks: {
				    beforeOpen: function() {
				       this.st.mainClass = this.st.el.attr('data-effect');
				    }
				},
			  	closeOnContentClick: true,
			});
		});
	</script>
<?php
}
add_action( 'wp_footer','gs_p_magnific_popup' );


// ---------- Shortcode [gs_portfolio] -------------

add_shortcode( 'gs_portfolio', 'gs_portfolio_shortcode' );

function gs_portfolio_shortcode( $atts ) {

	extract(shortcode_atts( 
			array(
			'posts' 	=> -1,
			'order'		=> 'DESC',
			'orderby'   => 'date',
			'title'		=> 'no'
			), $atts 
		));

	$gs_p_loop = new WP_Query(
		array(
			'post_type'	=> 'gs-portfolio',
			'order'		=> $order,
			'title'		=> $title,
			'posts_per_page'	=> 20
			)
		);

	$portfolio_id = rand( 10,1000 );

	$output = '<div class="wrap gs_portfolio_area" style="overflow-x:hidden">';
	$output .= '<div class="container">';
	$output .= '<div class="row clearfix gs_p_portfolio" id="gs_p_portfolio_'.$portfolio_id.'">';
		if ( $gs_p_loop->have_posts() ) {
			
			while ( $gs_p_loop->have_posts() ) {
				$gs_p_loop->the_post();				
				$gs_portfolio_id = get_post_thumbnail_id();

				$gs_portfolio_url = wp_get_attachment_url($gs_portfolio_id, 'full' );
				$gs_portfolio = aq_resize_gs_portfolio( $gs_portfolio_url, 600, 400, true, true, true );
				$gs_portfolio_alt = get_post_meta($gs_portfolio_id,'_wp_attachment_image_alt',true);

				$gs_p_meta = get_post_meta( get_the_id() );			
				$gs_p_title = get_the_title();
				$gs_p_content = get_the_content();
				$gs_p_content = (strlen($gs_p_content) > 50) ? substr($gs_p_content,0,80).'...' : $gs_p_content;

				$output .= '<div class="grid single-gsp col-md-4 col-sm-6 col-xs-12">';
					$output .= '<figure class="effect-sadie">';
					$output .= '<img src="'.$gs_portfolio.'" alt="'. $gs_portfolio_alt .'"/>';
						$output .= '<figcaption>';
						
							$output .= '<div>';
							$output .= '<h2>'. $gs_p_title .'</h2>';
								$output .= '<div class="gs_p_icons">';
								$output .= '<a class="gs_p_pop open-popup-link" href="#gs_p_popup_'.get_the_id().'" data-effect="mfp-move-horizontal"><i class="fa fa-eye"></i></a>';
								$output .= '<a class="gs_p_link" href="'.get_permalink().'"><i class="fa fa-link"></i></a>';
								$output .= '</div>';
								$output .= '<p>'. $gs_p_content .'</p>';
							$output .= '</div>';

						$output .= '</figcaption>';
					$output .= '</figure>';
				$output .= '</div>';

				// Popup
				$output .= '<div id="gs_p_popup_'.get_the_id().'" class="white-popup mfp-hide mfp-with-anim gs_p_popup">';
				$output .= '<div class="container">';
				$output .= '<div class="row">';
				$output .= '<div class="gs_p_popup_img col-md-6 col-sm-12">';
				$output .= '<img src="'.$gs_portfolio.'" alt="'. $gs_portfolio_alt .'">';
				$output .= '</div>';
				$output .= '<div class="gs_p_popup_content col-md-6 col-sm-12">';
				$output .= '<h2>'. get_the_title() .'</h2>';
				$output .= wpautop(get_the_content());
				
				if ($gs_p_meta['client_url'][0]) :
					$output .= '<a class="gsp_btn" href="'. $gs_p_meta['client_url'][0] .'" target="_blank">Portfolio Details</a>';
				endif;

				$output .= '</div>';
				$output .= '</div>';
				$output .= '</div>';
				$output .= '</div>'; // end of container
				// Popup end

			} // end while loop

		} else {
			$output .= "No Portfolio Added!";
		}

		wp_reset_postdata();
		wp_reset_query();
	$output .= '</div>'; // end row
	$output .= '</div>'; // end container
	$output .= '</div>'; // end wrap

	return $output;
}