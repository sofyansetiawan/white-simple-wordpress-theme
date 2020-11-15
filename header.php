<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>

    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/component.css">

	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>


  <div class="container">
  <nav class="navbar navbar-default navbar-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row">
    <div class="col-md-4 col-sm-8 col-xs-12">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo home_url(); ?>">
	        <img alt="Brand" class="img-responsive img-logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png">
	      </a>
	    </div>
	</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="col-md-8">
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-social navbar-right">
                <li>
                    <a href="#" class="btn-link"><span class="text-btn-top"><i class="fa fa-shopping-cart"></i></span></a>
                </li>
            </ul>
            <?php get_search_form(); ?>
            <div class="clearfix"></div>
            <?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>

        </div>

    </div>
    </div>
  </div><!-- /.container-fluid -->
</nav>
</div>