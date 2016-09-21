<?php

if (function_exists('register_nav_menus')) {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'purely' ),
        'footer'  => __( 'Footer Menu', 'purely' ),
    ) );
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id' => 'sidebar-widgets',
        'description' => '',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

function purely_custom_setup() {
    if (function_exists('add_theme_support')) {
    	add_theme_support( 'custom-header', array(
    	    'width'         => 1600,
    	    'height'        => 1200,
    	    'default-image' => get_template_directory_uri() . '/images/bg.jpg',
    	    'uploads'       => true
    	));

    	add_theme_support( 'custom-logo', array(
    	    'width'         => 200,
    	    'height'        => 200,
    	    'flex-width' => true,
    	    'flex-height' => true
    	));
    }
}

add_action( 'after_setup_theme', 'purely_custom_setup' );


function purely_get_logo() {
    $logo_src = get_template_directory_uri() . '/images/avatar.jpg';
    
    if (function_exists('has_custom_logo') && has_custom_logo()) {
        $logo_src = get_custom_logo();
        $tmp = explode('src="', $logo_src);
        if (count($tmp) > 1) {
            $tmp = explode('"', $tmp[1]);
            if (count($tmp) > 1) {
                $logo_src = $tmp[0];
            }
        }
    }
    
    return $logo_src;
}

function purely_get_header_img() {
    $src = '';
    if (function_exists('header_image')) {
        $src = get_header_image();
    }
    if ( $src == '' || $src == NULL) {
        $src = get_template_directory_uri() . '/images/bg.jpg';
    }
    
    return $src;
}


