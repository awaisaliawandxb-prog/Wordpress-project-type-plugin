<?php
/**
 * Plugin Name: Projects Post Type
 * Description: Registers a custom post type "Project" with REST API support.
 * Version: 1.0
 * Author: Awais Awan
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

/**
 * Register "Project" Custom Post Type
 */
function ppt_register_project_post_type() {
    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Projects',
        'name_admin_bar'     => 'Project',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Project',
        'new_item'           => 'New Project',
        'edit_item'          => 'Edit Project',
        'view_item'          => 'View Project',
        'all_items'          => 'All Projects',
        'search_items'       => 'Search Projects',
        'parent_item_colon'  => 'Parent Projects:',
        'not_found'          => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true, 
        'rest_base'          => 'projects',
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'excerpt', 'thumbnail'),
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'projects'),
    );

    register_post_type('project', $args);
}
add_action('init', 'ppt_register_project_post_type');


