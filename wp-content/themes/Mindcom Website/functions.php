<?php

// Load Stylesheets
function load_css()
{


    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-map', get_template_directory_uri() . '/assets/css/bootstrap.css.map', array(), false, 'all' );
    wp_enqueue_style('bootstrap-map');


    wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome-all.css', array(), false, 'all' );
    wp_enqueue_style('fontawesome');

    wp_register_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), false, 'all' );
    wp_enqueue_style('flaticon');

    wp_register_style('owl', get_template_directory_uri() . '/assets/css/owl.css', array(), false, 'all' );
    wp_enqueue_style('owl');

    wp_register_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), false, 'all' );
    wp_enqueue_style('fancybox');

    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), false, 'all' );
    wp_enqueue_style('animate');

    wp_register_style('color', get_template_directory_uri() . '/assets/css/color.css', array(), false, 'all' );
    wp_enqueue_style('color');

    wp_register_style('rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), false, 'all' );
    wp_enqueue_style('rtl');

    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), false, 'all' );
    wp_enqueue_style('responsive');
    

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style1.css', array(), false, 'all' );
    wp_enqueue_style('style');

    wp_register_style('style2', get_template_directory_uri() . '/assets/css/style2.css', array(), false, 'all' );
    wp_enqueue_style('style2');



	
}
add_action('wp_enqueue_scripts','load_css');

// Load Javascript
function load_js()
{	
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');

    

        // wp_register_style('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', 'jquery', false, 'all' );
        // wp_enqueue_style('bootstrap-bundle');

        wp_register_script('jquerymin', get_template_directory_uri() . '/assets/js/jquery.js', 'jquery', false, true);
		wp_enqueue_script('jquerymin');

        wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', 'jquery', false, true);
		wp_enqueue_script('popper');

        wp_register_script('owl', get_template_directory_uri() . '/assets/js/owl.js', 'jquery', false, true);
		wp_enqueue_script('owl');

		wp_register_script('wow-js', get_template_directory_uri() . '/assets/js/wow.js', 'jquery', false, true);
		wp_enqueue_script('wow-js');

        wp_register_script('validation', get_template_directory_uri() . '/assets/js/validation.js', 'jquery', false, true);
		wp_enqueue_script('validation');

        wp_register_script('facncybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', 'jquery', false, true);
		wp_enqueue_script('facncybox');

        wp_register_script('appear', get_template_directory_uri() . '/assets/js/appear.js', 'jquery', false, true);
		wp_enqueue_script('appear');

        wp_register_script('countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', 'jquery', false, true);
		wp_enqueue_script('countTo');

        wp_register_script('scrollbar', get_template_directory_uri() . '/assets/js/scrollbar.js', 'jquery', false, true);
		wp_enqueue_script('scrollbar');

        wp_register_script('nav-tool', get_template_directory_uri() . '/assets/js/nav-tool.js', 'jquery', false, true);
		wp_enqueue_script('nav-tool');

        wp_register_script('TweenMax', get_template_directory_uri() . '/assets/js/TweenMax.min.js', 'jquery', false, true);
		wp_enqueue_script('TweenMax');

        wp_register_script('circle-progress', get_template_directory_uri() . '/assets/js/circle-progress.js', 'jquery', false, true);
		wp_enqueue_script('circle-progress');

        wp_register_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', 'jquery', false, true);
		wp_enqueue_script('nice-select');

        wp_register_script('main', get_template_directory_uri() . '/assets/js/script1.js', 'jquery', false, true);
		wp_enqueue_script('main');

        wp_register_script('main-script', get_template_directory_uri() . '/assets/js/script2.js', 'jquery', false, true);
		wp_enqueue_script('main-script');

}
add_action('wp_enqueue_scripts', 'load_js');

function enqueue_fa_script(){
	wp_enqueue_script('fascript','https://kit.fontawesome.com/08f6394a28.js');
    
    
}
add_action('wp_enqueue_scripts','enqueue_fa_script');

//this is for the model box 
function webrpoint_enqueue_customjs(){
    // wp_enqueue_script('custom1','https://code.jquery.com/jquery-3.5.1.min.js');
    wp_enqueue_script('custom2','https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js');
    // wp_enqueue_script('custom3','https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js');
    // wp_enqueue_style('custom4','https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');
    // wp_enqueue_style('custom5','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
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



// function school_theme_init(){

//     register_sidebar( array(
//         'name' => __('Slider', 'school'),
//         'id' => 'main-slider',
//         'description' => 'Main Slider on the front page',
//         'before_widget' => '<section id="%1$s" class="box %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));
//     register_sidebar( array(
//         'name' => __('Primay_Sidebar', 'school'),
//         'id' => 'primary-sidebar',
//         'description' => 'This is the single page Sidebar on left Side',
//         'before_widget' => '<section id="%1$s" class="box %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));
//     register_sidebar( array(
//         'name' => __('NewsBoard', 'school'),
//         'id' => 'news-board',
//         'description' => 'News and upcomming events on Homepage',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));

//     register_sidebar( array(
//         'name' => __('Notice-Board Banner', 'school'),
//         'id' => 'notice-board',
//         'description' => 'Notice Board on Homepage',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));

//     register_sidebar( array(
//         'name' => __('Principal Message ', 'school'),
//         'id' => 'principal-message',
//         'description' => 'This is the front-end widgets custom sidebar',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));
//     register_sidebar( array(
//         'name' => __('Photo Gallery ', 'school'),
//         'id' => 'photo-gallery',
//         'description' => 'This is the front-end widgets custom sidebar',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));
//     register_sidebar( array(
//         'name' => __('Important Information ', 'school'),
//         'id' => 'impotant-information',
//         'description' => 'This is the front-end widgets custom sidebar',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));
//     register_sidebar( array(
//         'name' => __('Holiday Homework ', 'school'),
//         'id' => 'holiday-homework',
//         'description' => 'This is the front-end widgets custom sidebar',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));
//     register_sidebar( array(
//         'name' => __('Campus Video ', 'school'),
//         'id' => 'campus-video',
//         'description' => 'This is the front-end widgets custom sidebar',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h3 class="widget-title>',
//         'after_title' => '</h3></header>',
//     ));

//     register_sidebar( array(
//         'name' => __('Footer Widget 1', 'school'),
//         'id' => 'footer-1',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h2 class="widget-title>',
//         'after_title' => '</h2></header>',
//     ));

//     register_sidebar( array(
//         'name' => __('Footer Widget 2', 'school'),
//         'id' => 'footer-2',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h2 class="widget-title>',
//         'after_title' => '</h2></header>',
//     ));

//     register_sidebar( array(
//         'name' => __('Footer Widget 3', 'school'),
//         'id' => 'footer-3',
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget' => '</section>',
//         'before_title' => '<header><h2 class="widget-title>',
//         'after_title' => '</h2></header>',
//     ));
// };
// add_action('widgets_init', 'school_theme_init');



