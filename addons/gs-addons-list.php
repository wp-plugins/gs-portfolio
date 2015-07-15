<?php
function gsp_addons_list() {
	add_submenu_page( 'edit.php?post_type=gs-portfolio', 'Add-Ons', 'Add-Ons', 'manage_options', 'gs-add-ons', 'gsp_add_ons' );
}

function gsp_add_ons() { ?> 

<div class="wrap gs" style="overflow-x:hidden">
	<div class="container-fluid">
		<div class="row" id="addonlist" style="margin-top: -15px">

		<div class="col-md-12"><div class="panel panel-default" style="box-shadow: none;border-radius: 0;border: 0"><div class="panel-heading"><h3></h3></div><div class="panel-body"><ul class="nav nav-pills" id="filter-mods"><li class="active"><a href="http://www.gsamdani.me/wordpress-plugins" target="_blank">Add-Ons by GS Plugins</a></li>
		    <li><a href='#' rel=''></a></li>
		</ul></div></div></div>
			
			<div class="col-md-4 col-sm-6 col-xs-12 all"> <!-- start of Portfolio plugin -->
				<div class="panel panel-default">
				    <div class="panel-body" style="min-height: 130px;height: 130px;overflow: hidden">
						<div class="media">
						    <a href="http://www.gsamdani.me/product/gs-portfolio" target="_blank" class="pull-left">
						        <img width="100px" class="img-rounded" src="<?php echo plugins_url('/gs-portfolio/addons/img/gsp.png');?>" />
						    </a>
						    <div class="media-body">
						        <b><a href="http://www.gsamdani.me/product/gs-portfolio" target="_blank">GS Portfolio</a></b><br/>
						        <p>Best Responsive Portfolio Wordpress plugin to showcase your projects.</p>
						    </div>
						</div>
				    </div>
				    <div class="panel-footer" style="line-height: 30px;">
				        <div class="pull-right" style="margin-top: -2px">   
			                <a class="btn btn-sm btn-primary btn-purchase" href="http://www.gsamdani.me/product/gs-portfolio" target="_blank" style="border: 0;border-radius: 2px"><i class="fa fa-shopping-cart"></i> &nbsp;Buy Now &nbsp; <span class="label label-warning" style="font-size: 8pt;padding: 1px 5px;margin-top: 1px">$15</span> </a>
				        </div>
				        <a class="btn btn-sm btn-success"  target="_blank" rel="" href="http://portfolio.gsamdani.me" style="border: 0;border-radius: 2px"><i class="fa fa-eye"></i> &nbsp;Demo</a>
				        <a class="btn btn-sm btn-info"  target="_blank" rel="" href="http://portfolio.gsamdani.me/documentation" style="border: 0;border-radius: 2px"><i class="fa fa-folder-open-o"></i> &nbsp;Docs</a>
				    </div>
				</div>
		    </div> <!-- end of plugin -->

		   	<div class="col-md-4 col-sm-6 col-xs-12 all"> <!-- start of Logo plugin -->
				<div class="panel panel-default">
				    <div class="panel-body" style="min-height: 130px;height: 130px;overflow: hidden">
						<div class="media">
						    <a href="http://www.gsamdani.me/product/gs-logo-slider" target="_blank" class="pull-left">
						        <img width="100px" class="img-rounded" src="<?php echo plugins_url('/gs-portfolio/addons/img/gsl.png');?>" />
						    </a>
						    <div class="media-body">
						        <b><a href="http://www.gsamdani.me/product/gs-logo-slider" target="_blank">GS Logo Slider</a></b><br/>
						        <p>Best Responsive Logo Slider to display partners, clients or sponsor's Logo.</p>
						    </div>
						</div>
				    </div>
				    <div class="panel-footer" style="line-height: 30px;">
				        <div class="pull-right" style="margin-top: -2px">   
			                <a class="btn btn-sm btn-primary btn-purchase" href="http://www.gsamdani.me/product/gs-logo-slider" target="_blank" style="border: 0;border-radius: 2px"><i class="fa fa-shopping-cart"></i> &nbsp;Buy Now &nbsp; <span class="label label-warning" style="font-size: 8pt;padding: 1px 5px;margin-top: 1px">$15</span> </a>
				        </div>
				        <a class="btn btn-sm btn-success"  target="_blank" rel="" href="http://logo.gsamdani.me" style="border: 0;border-radius: 2px"><i class="fa fa-eye"></i> &nbsp;Demo</a>
				        <a class="btn btn-sm btn-info"  target="_blank" rel="" href="http://logo.gsamdani.me/documentation" style="border: 0;border-radius: 2px"><i class="fa fa-folder-open-o"></i> &nbsp;Docs</a>
				    </div>
				</div>
		    </div> <!-- end of plugin -->

		    <div class="col-md-4 col-sm-6 col-xs-12 all"> <!-- start of Testimonial plugin -->
				<div class="panel panel-default">
				    <div class="panel-body" style="min-height: 130px;height: 130px;overflow: hidden">
						<div class="media">
						    <a href="http://www.gsamdani.me/product/gs-testimonial-slider" target="_blank" class="pull-left">
						        <img width="100px" class="img-rounded" src="<?php echo plugins_url('/gs-portfolio/addons/img/gst.png');?>" />
						    </a>
						    <div class="media-body">
						        <b><a href="http://www.gsamdani.me/product/gs-testimonial-slider" target="_blank">GS Testimonial Slider</a></b><br/>
						        <p>Best Responsive Testimonials slider to display client's testimonials / recommendations.</p>
						    </div>
						</div>
				    </div>
				    <div class="panel-footer" style="line-height: 30px;">
				        <!-- <div class="pull-right" style="margin-top: -2px">   
				                <a class="btn btn-sm btn-primary btn-install"  target="_blank" rel="" href="http://www.gsamdani.me/product/gs-testimonial-slider" style="border: 0;border-radius: 2px"><i class="fa fa-download"></i> &nbsp;Download</a>
				        </div> -->
				        <div class="pull-right" style="margin-top: -2px">   
			                <a class="btn btn-sm btn-primary btn-purchase" href="http://www.gsamdani.me/product/gs-testimonial-slider" target="_blank" style="border: 0;border-radius: 2px"><i class="fa fa-shopping-cart"></i> &nbsp;Buy Now &nbsp; <span class="label label-warning" style="font-size: 8pt;padding: 1px 5px;margin-top: 1px">$15</span> </a>
				        </div>
				        <a class="btn btn-sm btn-success"  target="_blank" rel="" href="http://testimonial.gsamdani.me" style="border: 0;border-radius: 2px"><i class="fa fa-eye"></i> &nbsp;Demo</a>
				        <a class="btn btn-sm btn-info"  target="_blank" rel="" href="http://testimonial.gsamdani.me/documentation" style="border: 0;border-radius: 2px"><i class="fa fa-folder-open-o"></i> &nbsp;Docs</a>
				    </div>
				</div>
		    </div> <!-- end of plugin -->


		</div> <!-- end of row -->
	</div> <!-- end of container-fluid -->
</div> <!-- enf of wrap -->
<?php 
}

add_action('admin_menu', 'gsp_addons_list');