<?php

  get_header(); 

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/home/banner.jpg",
        'alt' => "computers"
      ),
      'title' => get_the_title(get_option('page_for_posts' ))
    )
  );

  get_template_part('partials/home/section1');
  get_template_part('partials/home/section2');

  get_footer();

?>