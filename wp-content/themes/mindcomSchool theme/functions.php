<?php

// Load Stylesheets
function load_css()
{


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/fontawesome.css', array(), false, 'all' );
    wp_enqueue_style('fontawesome');

    wp_register_style('brands', get_template_directory_uri() . '/fonts/fontawesome/css/brands.css', array(), false, 'all' );
    wp_enqueue_style('brands');

    wp_register_style('solid', get_template_directory_uri() . '/fonts/fontawesome/css/solid.css', array(), false, 'all' );
    wp_enqueue_style('solid');

    wp_register_style('animate', get_template_directory_uri() . '/plugins/animate-css/animate.css', array(), false, 'all' );
    wp_enqueue_style('animate');

    wp_register_style('slider', get_template_directory_uri() . '/plugins/slider/slider.css', array(), false, 'all' );
    wp_enqueue_style('slider');

    wp_register_style('carousel', get_template_directory_uri() . '/plugins/owl-carousel/owl.carousel.css', array(), false, 'all' );
    wp_enqueue_style('carousel');

    wp_register_style('theme', get_template_directory_uri() . '/plugins/owl-carousel/owl.theme.css', array(), false, 'all' );
    wp_enqueue_style('theme');

    wp_register_style('fancybox', get_template_directory_uri() . '/plugins/facncybox/jquery.fancybox.css', array(), false, 'all' );
    wp_enqueue_style('fancybox');
    
    wp_register_style('carousel', get_template_directory_uri() . '/css/carousel.css', array(), false, 'all' );
    wp_enqueue_style('main');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all' );
    wp_enqueue_style('style');



	
}
add_action('wp_enqueue_scripts','load_css');

// Load Javascript
function load_js()
{	
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');

        wp_register_style('fontawesome', get_template_directory_uri() . '/fonts/fontawesome/js/all.js', array(), false, 'all' );
        wp_enqueue_style('fontawesome');

        wp_register_script('jquerymin', get_template_directory_uri() . '/plugins/jQurey/jquery.min.js', 'jquery', false, true);
		wp_enqueue_script('jquerymin');

        wp_register_script('validation', get_template_directory_uri() . '/plugins/form-validation/jquery.form.js', 'jquery', false, true);
		wp_enqueue_script('validation');

        wp_register_script('formvalidation', get_template_directory_uri() . '/plugins/form-validation/jquery.validate.min.js', 'jquery', false, true);
		wp_enqueue_script('formvalidation');

		wp_register_script('wow-js', get_template_directory_uri() . '/plugins/wow-js/wow.min.js', 'jquery', false, true);
		wp_enqueue_script('wow-js');

        wp_register_script('slider', get_template_directory_uri() . '/plugins/slider/slider.js', 'jquery', false, true);
		wp_enqueue_script('slider');

        wp_register_script('facncybox', get_template_directory_uri() . '/plugins/facncybox/jquery.fancybox.js', 'jquery', false, true);
		wp_enqueue_script('facncybox');

        wp_register_script('owl-carousel', get_template_directory_uri() . '/plugins/owl-carousel/owl.carousel.min.js', 'jquery', false, true);
		wp_enqueue_script('owl-carousel');

        wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', 'jquery', false, true);
		wp_enqueue_script('slick');

        wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', false, true);
		wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'load_js');

function enqueue_fa_script(){
	wp_enqueue_script('fascript','https://kit.fontawesome.com/08f6394a28.js');
}
add_action('wp_enqueue_scripts','enqueue_fa_script');

//this is for the model box 
function webrpoint_enqueue_customjs(){
    wp_enqueue_script('custom','https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js');
    wp_enqueue_style('custom','https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');
}
add_action('wp_enqueue_scripts','webrpoint_enqueue_customjs');

// Theme Options
//for custom menu
add_theme_support('menus');
//for custom post
add_theme_support('post-thumbnails');
//for custom logo
add_theme_support('custom-logo');
//for custom widgets
add_theme_support('widgets');
//for custom Header
add_theme_support('custom-header');
//for custom footer
add_theme_support('custom-footer');



function school_theme_init(){

    register_sidebar( array(
        'name' => __('Slider', 'school'),
        'id' => 'main-slider',
        'description' => 'Main Slider on the front page',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));
    register_sidebar( array(
        'name' => __('Primay_Sidebar', 'school'),
        'id' => 'primary-sidebar',
        'description' => 'This is the single page Sidebar on left Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));
    register_sidebar( array(
        'name' => __('NewsBoard', 'school'),
        'id' => 'news-board',
        'description' => 'News and upcomming events on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));

    register_sidebar( array(
        'name' => __('Notice-Board Banner', 'school'),
        'id' => 'notice-board',
        'description' => 'Notice Board on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));

    register_sidebar( array(
        'name' => __('Principal Message ', 'school'),
        'id' => 'principal-message',
        'description' => 'This is the front-end widgets custom sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));
    register_sidebar( array(
        'name' => __('Photo Gallery ', 'school'),
        'id' => 'photo-gallery',
        'description' => 'This is the front-end widgets custom sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));
    register_sidebar( array(
        'name' => __('Important Information ', 'school'),
        'id' => 'impotant-information',
        'description' => 'This is the front-end widgets custom sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));
    register_sidebar( array(
        'name' => __('Holiday Homework ', 'school'),
        'id' => 'holiday-homework',
        'description' => 'This is the front-end widgets custom sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));
    register_sidebar( array(
        'name' => __('Campus Video ', 'school'),
        'id' => 'campus-video',
        'description' => 'This is the front-end widgets custom sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title>',
        'after_title' => '</h3></header>',
    ));

    register_sidebar( array(
        'name' => __('Footer Widget 1', 'school'),
        'id' => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title>',
        'after_title' => '</h2></header>',
    ));

    register_sidebar( array(
        'name' => __('Footer Widget 2', 'school'),
        'id' => 'footer-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title>',
        'after_title' => '</h2></header>',
    ));

    register_sidebar( array(
        'name' => __('Footer Widget 3', 'school'),
        'id' => 'footer-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title>',
        'after_title' => '</h2></header>',
    ));
};
add_action('widgets_init', 'school_theme_init');



