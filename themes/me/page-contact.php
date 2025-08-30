<?php 
/*  Template Name: Contact me
    Template Post Type: page
*/

$to = 'markluigibatoks@gmail.com';
    $subject = "Thank you for contacting us!";

    $body = '<p>This is a test email</p>';

    $headers = ['Content-Type: text/html; charset=UTF-8'];

    wp_mail($to, $subject, $body, $headers);

    
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