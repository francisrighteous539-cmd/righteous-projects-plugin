<?php
/**
 * Plugin Name: My Projects
 * Description: A simple plugin to manage and display portfolio projects.
 * Version: 1.1
 * Author: Francis Righteous Christopher
 * Text Domain: my-projects
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Type: Projects
 */
if (!function_exists('mp_register_projects_cpt')) {
    function mp_register_projects_cpt() {
        $labels = array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects found',
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-portfolio'
        );

        register_post_type('project', $args);
    }
}
add_action('init', 'mp_register_projects_cpt');

/**
 * Enqueue plugin styles
 */
function mp_enqueue_styles() {
    wp_enqueue_style('mp-style', plugin_dir_url(__FILE__) . 'assets/style.css');
}
add_action('wp_enqueue_scripts', 'mp_enqueue_styles');

/**
 * Shortcode: Display Projects
 */
function mp_display_projects() {
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
    );

    $projects = new WP_Query($args);

    $output = '<div class="my-projects">';
    $output .= '<div style="text-align:center; margin-bottom:20px;">';
    $output .= '<img src="' . plugin_dir_url(_FILE_) . 'assets/featured.webp" alt="Featured Image" style="max-width:200px; height:auto;" />';
    $output .= '</div>';

    if ($projects->have_posts()) {
        $output .= '<ul>';
        while ($projects->have_posts()) {
            $projects->the_post();
            $output .= '<li>';
            $output .= '<h3>' . get_the_title() . '</h3>';
            if (has_post_thumbnail()) {
                $output .= get_the_post_thumbnail(get_the_ID(), 'thumbnail');
            }
            $output .= '<div>' . get_the_excerpt() . '</div>';
            $output .= '</li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    } else {
        $output .= '<p>No projects found.</p>';
    }

    $output .= '</div>';
    return $output;
}
add_shortcode('my_projects', 'mp_display_projects');