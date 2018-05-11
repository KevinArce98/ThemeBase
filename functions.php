<?php 
	add_theme_support('post-thumbnails');

	add_image_size('post-image-thumb', 745,372, true);

	register_nav_menus( array(
		'menu-top' => 'Menu Principal',
		'menu-footer' => 'Menu Footer'
	));
 ?>