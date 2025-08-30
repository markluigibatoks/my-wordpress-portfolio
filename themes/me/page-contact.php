<?php 
/*  Template Name: Contact me
    Template Post Type: page
*/

$to = 'markluigibatoks@gmail.com';
$subject = "Thank you for contacting us!";
$body = '<p>This is a test email</p>';
$headers = [
    'Content-Type: text/html; charset=UTF-8',
    'From: Mark <hello@markluigibatoctoy.com>'
];

error_log('send_contact_form_email fired');
error_log('To: ' . $to);
error_log('Body: ' . $body);

if ( wp_mail($to, $subject, $body, $headers) ) {
    echo 'Email sent successfully!';
} else {
    echo 'Email failed!';
    error_log('DEBUG: wp_mail failed for ' . $to);
}


    
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