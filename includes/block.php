<?php

function arch_custome_block(){
    if(function_exists('acf_register_block_type')){
        acf_register_block_type(array(
            'name'      => 'arch-page-banner',
            'title'      => 'Arch Page Banner',
            'render_template' => 'templates/blocks/block-page-banner.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
        acf_register_block_type(array(
            'name'      => 'arch-page-quote',
            'title'      => 'Arch Page Quote',
            'render_template' => 'templates/blocks/block-page-Quote.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
        acf_register_block_type(array(
            'name'      => 'arch-page-service',
            'title'      => 'Arch Page Service',
            'render_template' => 'templates/blocks/block-page-service.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
        acf_register_block_type(array(
            'name'      => 'arch-page-projects',
            'title'      => 'Arch Page Project',
            'render_template' => 'templates/blocks/block-page-projects.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
        acf_register_block_type(array(
            'name'      => 'arch-page-footer',
            'title'      => 'Arch Page Footer',
            'render_template' => 'templates/blocks/block-page-footer.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
        acf_register_block_type(array(
            'name'      => 'arch-page-contact',
            'title'      => 'Arch Page Contact',
            'render_template' => 'templates/blocks/block-page-contact.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
        acf_register_block_type(array(
            'name'      => 'arch-page-Vision',
            'title'      => 'Arch Page Vision',
            'render_template' => 'templates/blocks/block-page-vision.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
        acf_register_block_type(array(
            'name'      => 'arch-page-Mission',
            'title'      => 'Arch Page Mission',
            'render_template' => 'templates/blocks/block-page-mission.php',
            'category'    => 'common',
            'icon'      => 'admin-comments',
            'mode'      => 'edit'
        ));
    }
}

add_action('acf/init','arch_custome_block');
