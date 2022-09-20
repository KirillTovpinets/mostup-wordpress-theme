<?php

function mostup_theme_support() {
	add_theme_support( 'post-thumbnails' );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);
}

add_action( 'after_setup_theme', 'mostup_theme_support' );

function mostup_register_styles() {


	wp_enqueue_style( 'mostup-style', get_stylesheet_uri());
    wp_enqueue_style( 'mostup-animate', get_template_directory_uri() . 'animate.scss');

}

add_action( 'wp_enqueue_scripts', 'mostup_register_styles' );

function mostup_register_scripts() {
	wp_enqueue_script( 'mostup-js', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'), 1, true );
}

add_action( 'wp_enqueue_scripts', 'mostup_register_scripts' );

function mostup_menus() {

	$locations = array(
		'primary'  => __( 'Main Menu', 'mostup' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'mostup_menus' );

function mostup_team_member_post_type() {
    register_post_type('team_member',
        array(
            'labels'      => array(
                'name'          => 'Актёры театра', 'textdomain',
                'singular_name' => 'Актёр',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить актёра'
            ),
            'public'      => true,
            'menu_icon' => 'dashicons-groups',
            'has_archive' => true,
            'supports' => array( 'title', 'thumbnail', 'custom-fields'),
        )
    );
}
add_action('init', 'mostup_team_member_post_type');

function mostup_comming_soon_type() {
    register_post_type('coming_soon',
        array(
            'labels'      => array(
                'name'          => 'Гастроли', 'textdomain',
                'singular_name' => 'Спектакль',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить спектакль',
            ),
            'menu_icon' => 'dashicons-calendar',
            'public'      => true,
            'has_archive' => true,
            'supports' => array( 'title', 'thumbnail', 'custom-fields'),
        )
    );
}
add_action('init', 'mostup_comming_soon_type');

function mostup_our_plays_post_type() {
    register_post_type('our_plays',
        array(
            'labels'      => array(
                'name'          => 'Спектакли', 'textdomain',
                'singular_name' => 'Спектакль',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить спектакль'
            ),
            'public'      => true,
            'menu_icon' => 'dashicons-smiley',
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'custom-fields'),
        )
    );
}
add_action('init', 'mostup_our_plays_post_type');

function mostup_cources_post_type() {
    register_post_type('cources',
        array(
            'labels'      => array(
                'name'          => 'Обучающие курсы', 'textdomain',
                'singular_name' => 'Курс',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить курс'
            ),
            'public'      => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports' => array( 'title', 'thumbnail','editor', 'custom-fields'),
        )
    );
}
add_action('init', 'mostup_cources_post_type');

function mostup_testimonials_post_type() {
    register_post_type('testimonial',
        array(
            'labels' => array(
                'name' => 'Отзывы', 'textdomain',
                'singular_name' => 'Отзыв',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить отзыв'
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => array( 'title','editor'),
            'menu_icon' => 'dashicons-testimonial',
        )
    );
}
add_action('init', 'mostup_testimonials_post_type');

function team_member_list(){
	$args = array(  
        'post_type' => 'team_member',
		'posts_per_page' => -1,
		'order_by' => 'id',
		'order' => 'ASC'
    );

	global $team_members;
    $team_members = new WP_Query( $args ); 
}

function our_plays_list(){
	$args = array(  
        'post_type' => 'our_plays',
		'posts_per_page' => -1,
		'order_by' => 'id',
		'order' => 'ASC'
    );

	global $our_plays;
    $our_plays = new WP_Query( $args ); 
}

function testimonial_list(){
	$args = array(  
        'post_type' => 'testimonial',
		'posts_per_page' => -1,
		'order_by' => 'id',
		'order' => 'ASC'
    );

	global $testimonials;
    $testimonials = new WP_Query( $args ); 
}

function coming_soon_list(){
	$args = array(  
        'post_type' => 'coming_soon',
		'posts_per_page' => -1,
		'order_by' => 'id',
		'order' => 'ASC'
    );

	global $coming_soon;
    $coming_soon = new WP_Query( $args ); 
}

function cources_list(){
    $args = array(
        'post_type' => 'cources',
        'posts_per_page' => -1,
        'order_by' => 'id',
        'order' => 'ASC'
    );

    global $cources;
    $cources = new WP_Query($args);
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)){
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
	if (isset($args->add_a_class)) {
	  $atts['class'] = $args->add_a_class;
	}
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

require('custom-settings.php');

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">подробнее...</a>';
   }
add_filter( 'the_content_more_link', 'modify_read_more_link' );
?>
