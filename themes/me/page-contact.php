<?php 
/*  Template Name: Contact me
    Template Post Type: page
*/
  get_header();

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/contact-me/banner.jpg",
        'alt' => "a place full of trees"
      ),
      'title' => get_the_title()
    )
  );

  get_template_part("/partials/contact-me/section1");
  
  get_footer();
?>