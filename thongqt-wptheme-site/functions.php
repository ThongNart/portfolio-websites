<?php
/*
===================================
Formating CSS and JS
===================================
*/

   /* include css into the header, footer, index file*/
    function freedom_script_enqueue() {
      //css
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css',array(),'3.3.4','all');
        wp_enqueue_style('customstylecustomnameidthongtran',get_template_directory_uri() .'/css/freedom.css', array(),'1.0.0','all');
        
      //Js
        wp_enqueue_script('jquery');
        wp_enqueue_script('customjscustomnameidthongtran',get_template_directory_uri().'/js/freedom.js', array(),'1.0.1',true);
        wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js', array(),'3.3.4',true);

    }

/* call an action to the function of when can wordpress execute */

    add_action('wp_enqueue_scripts', 'freedom_script_enqueue');
     
/*
===================================
Activate menus
===================================
*/

/* hook to activate theme support, put this inside a function. Give unique name for function*/
    function freedom_theme_setup(){
        
            add_theme_support('menus');
            
            register_nav_menu('primary','Primary Header Navigation');
            register_nav_menu('secondary','Footer Navigation');

    }
/* call action of the fucntion*/
    add_action('init','freedom_theme_setup');



/*
===================================
Theme support functions
===================================
*/

/* this 'hook' can be used even not in a function and an action*/
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