<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php 
		if ( is_home() ) {
			echo get_bloginfo('name');
		}else if( is_single() || is_page()){
			echo the_title();
		}else if( is_404() ){
			echo "Not Found";
		}else {
			echo get_bloginfo('name');
		}
	 ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>
<div class="container-fluid bg-dark">
		<div class="container">
			<div class="row pt-2 pb-2">
				<div class="text-redes col-md-6 col-sm-12 ">
					<p>Visitanos en nuestras redes sociales</p>
				</div>
				<div class="redes-sociales col-md-6 col-sm-12">
					<a class="facebook" href=""><i class="fab fa-facebook-f"></i></a>
					<a class="youtube" href=""><i class="fab fa-youtube"></i></a>
					<a class="twitter" href=""><i class="fab fa-twitter"></i></a>
					<a class="instagram" href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu">
		<div class="container">
			<div class="row">
				<div class="logo col-md-3 col-sm-12">
					<a href="<?php bloginfo('url') ?>">
						<img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo-page">
					</a>
				</div>
			    <div class="navbar-menu col-md-9 col-sm-12">
				    <?php wp_nav_menu(array(
			    			'container' => false,
			    			'menu-class' => '',
			    			'items_wrap' => '<ul>%3$s</ul>',
			    			'theme_location' => 'menu-top'
			    	)); ?>
			    </div>
			</div>
		</div>
	</div>