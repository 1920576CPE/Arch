<?php 

//Loading of CSS & JS

function Arch_assets(){
    wp_enqueue_style('Arch-css', get_template_directory_uri(). '/css/main.css',microtime());

    wp_enqueue_script("arch-script", get_template_directory_uri(). "/js/script.js",NULL,microtime(), true);
}

add_action('wp_enqueue_scripts', 'Arch_assets');

