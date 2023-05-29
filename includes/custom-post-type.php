<?php 

function arch_custom_post() {

    $service_label = array (
        'name'          => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'       => __('Add Service', 'textdomain'),
        'add_new_item'  => __('Add New Service','textdomain'),
        'edit_item'     => __('Edit Service', 'textdomain'),
        'all_items'     => __('Services', 'textdomain'),
    );

    $service_args = array (
        'labels'             => $service_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor','thumbnail','excerpt'),
    );

    register_post_type('services_Post',$service_args);



    $projects_label = array (
        'name'          => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'       => __('Add Project', 'textdomain'),
        'add_new_item'  => __('Add New Project','textdomain'),
        'edit_item'     => __('Edit Project', 'textdomain'),
        'all_items'     => __('Projects', 'textdomain'),
    );

    $projects_args = array (
        'labels'             => $projects_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor','thumbnail','excerpt'),
    );

    register_post_type('projects_Post',$projects_args);

    $projectsPage_label = array (
        'name'          => __('ProjectsPage', 'textdomain'),
        'singular_name' => __('ProjectPage', 'textdomain'),
        'add_new'       => __('Add Project', 'textdomain'),
        'add_new_item'  => __('Add New Project','textdomain'),
        'edit_item'     => __('Edit Project', 'textdomain'),
        'all_items'     => __('Projects', 'textdomain'),
    );

    $projectsPage_args = array (
        'labels'             => $projectsPage_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor','thumbnail','excerpt'),
    );

    register_post_type('projectsPage_Post',$projectsPage_args);


   
    

}

add_action('init','arch_custom_post');

