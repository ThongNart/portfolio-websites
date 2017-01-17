<?php
/*
===================================
Formating CSS and JS
===================================
*/

    function freedom_script_enqueue() {
      //css
        wp_enqueue_style('w3','//www.w3schools.com/lib/w3.css',array(),'null','all');
        wp_enqueue_style('fontfreedom','//fonts.googleapis.com/css?family=Montserrat',array(),'null','all');
        wp_enqueue_style('iconfreedom','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array(),'null','all');
        wp_enqueue_style('custom',get_template_directory_uri() .'/css/freedom.css', array(),'1.0.0','all');
        
      //Js
        wp_enqueue_script('jquery');
        wp_enqueue_script('custom',get_template_directory_uri().'/js/freedom.js', array(),'1.0.1',true);

    }


    add_action('wp_enqueue_scripts', 'freedom_script_enqueue');
     
/*
===================================
Activate menus
===================================
*/

    function freedom_theme_setup(){
        
            add_theme_support('menus');
            
            register_nav_menu('primary','Primary Header Navigation');
            register_nav_menu('secondary','Footer Navigation');

    }

    add_action('init','freedom_theme_setup');



/*
===================================
Theme support functions
===================================
*/

add_theme_support ('custom-background');

add_theme_support ('custom-header');

add_theme_support ('post-thumbnails');

add_theme_support ('post-formats',array('aside','image','video'));



/*
===================================
side bar functions
===================================
*/


function freedom_widget_setup(){

    register_sidebar (array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title'   => '</h1>',

        )
    );
}

add_action('widgets_init','freedom_widget_setup');





?>