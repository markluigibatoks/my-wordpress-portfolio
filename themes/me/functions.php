<?php
require get_theme_file_path('theme-setup/wordpress-login.php');
require get_theme_file_path('theme-setup/inline-svg.php');
require get_theme_file_path('/theme-setup/new-post-type.php');
require get_theme_file_path('/theme-setup/seo-fix.php');
require get_theme_file_path('/theme-setup/route-contact-us.php');

function load_theme_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');

  wp_localize_script('ourmainjs', 'siteData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));

  wp_enqueue_script('masonry');
}

add_action('wp_enqueue_scripts', 'load_theme_assets');

function theme_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'wp-block-styles' );

  add_theme_support('editor-styles');
  add_editor_style('build/editor.css');

  add_image_size('featured-image', 572, 377, ['center', 'center']);
}

function register_menus() {
  register_nav_menu('primary', __('Primary Menu'));
}

add_action('after_setup_theme', 'register_menus');
add_action('after_setup_theme', 'theme_support');

add_action('enqueue_block_editor_assets', function () {
  wp_enqueue_script(
    'editor-custom-logic',
    get_theme_file_uri('/build/editor.js'),
    ['wp-blocks', 'wp-hooks', 'wp-edit-post'],
    '1.0',
    true
  );

  $post_type = get_post_type();
  wp_add_inline_script('editor-custom-logic', 'window.currentPostType = "' . esc_js($post_type) . '";', 'before');
});

