<?php
function register_contact_us_post_type() {
    $labels = [
        'name'               => 'Contact Messages',
        'singular_name'      => 'Contact Message',
        'menu_name'          => 'Contact Us',
        'name_admin_bar'     => 'Contact Message',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Message',
        'new_item'           => 'New Message',
        'edit_item'          => 'Edit Message',
        'view_item'          => 'View Message',
        'all_items'          => 'All Messages',
        'search_items'       => 'Search Messages',
        'parent_item_colon'  => 'Parent Messages:',
        'not_found'          => 'No messages found.',
        'not_found_in_trash' => 'No messages found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,          // Hidden from front-end
        'show_ui'            => true,           // Show in admin dashboard
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-email', // Mail icon
        'capability_type'    => 'post',
        'supports'           => ['title', 'editor', 'custom-fields'], // Title and content editor for message
        'has_archive'        => false,
        'exclude_from_search'=> true,
        'publicly_queryable' => false,
        'show_in_rest'       => true,           // Enable REST API support
    ];

    register_post_type('contact_us', $args);
}
add_action('init', 'register_contact_us_post_type');


