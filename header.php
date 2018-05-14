<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,400,600,700" rel="stylesheet">
	
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
					<a class="facebook" href=""><i class="fa fa-facebook-f"></i></a>
					<a class="youtube" href=""><i class="fa fa-youtube-play"></i></a>
					<a class="twitter" href=""><i class="fa fa-twitter"></i></a>
					<a class="instagram" href=""><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu">
		<div class="container">
			<div class="row">
				<div class="logo col-md-3 col-sm-12">
					<a href="<?php echo esc_url( home_url('/') ); ?>">
						<img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo-page">
					</a>
				</div>
			    <div class="navbar-menu col-md-9 col-sm-12">
				    <?php 
				   		$args = array(
				   			'theme_location' => 'menu-top',
				   			'container' => false,
				   			'menu-class' => '',
				   			'items_wrap' => '<ul>%3$s</ul>'
				   		);

				   		wp_nav_menu($args); 

				   	?>
			    </div>
			</div>
		</div>
	</div>