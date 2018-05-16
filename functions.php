<?php 
	/* Add Support Thumbnails */
	function theme_setup(){
		add_theme_support('post-thumbnails');	
		add_image_size('post-image-thumb', 745,372, true);
		add_image_size('portfolio-thumb', 370,250, true);
	}
	add_action('after_setup_theme', 'theme_setup');
	/*------------------------------*/

	/* Add CSS Files */
	function add_styles()
	{

		wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0');
		wp_enqueue_style('bootstrap');

		wp_register_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array('bootstrap'), '5.0');
		wp_enqueue_style('fontawesome');

		wp_register_style('styles', get_template_directory_uri().'/style.css', array('bootstrap'), '4.0');
		wp_enqueue_style('styles');

		wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0', true);

	}
	add_action('wp_enqueue_scripts', 'add_styles');
	/*------------------------------*/

	/* Register Menus */
	function add_menus()
	{
		register_nav_menus( array(
			'menu-top' => __('Header Menu', 'themebase'),
			'menu-side' => __('Sidebar Menu', 'themebase'),
			'menu-footer' => __('Footer Menu', 'themebase')
		));
	}

	add_action('init', 'add_menus');
 	/*------------------------------*/

 	/* Register widgets */
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
	/*------------------------------*/


	/*Create Custom Post Type*/
	add_action( 'init', 'projects' );
	function projects() {
		$labels = array(
			'name'               => _x( 'Proyectos', 'themebase' ),
			'singular_name'      => _x( 'Proyectos', 'post type singular name', 'themebase' ),
			'menu_name'          => _x( 'Proyectos', 'admin menu', 'themebase' ),
			'name_admin_bar'     => _x( 'Proyectos', 'add new on admin bar', 'themebase' ),
			'add_new'            => _x( 'Agregar Nuevo', 'book', 'themebase' ),
			'add_new_item'       => __( 'Agregar Nuevo Proyecto', 'themebase' ),
			'new_item'           => __( 'Nuevos Proyectos', 'themebase' ),
			'edit_item'          => __( 'Editar Proyecto', 'themebase' ),
			'view_item'          => __( 'Ver Proyecto', 'themebase' ),
			'all_items'          => __( 'Todos los Proyectos', 'themebase' ),
			'search_items'       => __( 'Buscar Proyectos', 'themebase' ),
			'parent_item_colon'  => __( 'Parent Proyectos:', 'themebase' ),
			'not_found'          => __( 'Proyectos no encontrados.', 'themebase' ),
			'not_found_in_trash' => __( 'Proyecto no encontrado en la papelera.', 'themebase' )
		);

		$args = array(
			'labels'             => $labels,
	    'description'        => __( 'Descripcion.', 'themebase' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'proyectos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'menu_icon'   		 => 'dashicons-portfolio',
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
	    'taxonomies'          => array( 'category' ),
		);

		register_post_type( 'proyectos', $args );
	}
 ?>