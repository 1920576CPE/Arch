<?php

function profile_support(){

    register_nav_menus(
        array(
            'header_menu' => __('header menu','text_domain'),
            'footer_menu' => __('footer menu','text_domain'),
            'connect_menu' => __('connect menu','text_domain')
        )

        
        );
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_image_size('thumbnail-project', 250, 150, true );
        add_image_size('banner-project', 1640, 560, true );

        add_theme_support( 'custom-logo', 
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme','profile_support');