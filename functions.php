<?php 

	/* Add CSS Files */
	function add_styles()
	{

		wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0');
		wp_enqueue_style('bootstrap');

		wp_register_style('fontawesome', get_template_directory_uri().'css/fontawesome.min.css', array('bootstrap'), '5.0');
		wp_enqueue_style('fontawesome');

		wp_register_style('styles', get_template_directory_uri().'/style.css', array('bootstrap'), '4.0');
		wp_enqueue_style('styles');

	}
	add_action('wp_enqueue_scripts', 'add_styles');
	/*------------------------------*/

	/* Add Support Thumbnails Posts */
	add_theme_support('post-thumbnails');
	add_image_size('post-image-thumb', 745,372, true);
	/*------------------------------*/

	/* Register Menus */
	if ( !function_exists('add_menus') )
	{
		function add_menus()
		{
			register_nav_menus( array(
				'menu-top' => __('Header Menu', 'themebase'),
				'menu-side' => __('Sidebar Menu', 'themebase'),
				'menu-footer' => __('Footer Menu', 'themebase')
			));
		}
	
		add_action('init', 'add_menus');
	}
 	/*------------------------------*/

 	if ( function_exists('register_sidebar') )
	{
	  register_sidebar(array(
	  	'name'          => __( 'Sidebar Widget', 'ThemeBase' ),
		'id'            => 'lateral-widget',    // ID should be LOWERCASE  ! ! !
		'description'   => '',
	        'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
	    'after_widget' => '</li>',
	    'before_title' => '',
	    'after_title' => '',
	  ));
	}


	

 ?>