<?php
add_action('acf/save_post', 'send_contact_form_email', 20);
function send_contact_form_email($post_id) {

    var_dump($post_id);

    $name = get_field('name', $post_id);
    $email = get_field('email', $post_id);
    $message = get_field('message', $post_id);

    $to = 'markluigibatoks@gmail.com';
    $subject = "Thank you for contacting us!";

    $body = '<p>This is a test email</p>';

    $headers = ['Content-Type: text/html; charset=UTF-8'];

    wp_mail($to, $subject, $body, $headers);
}
?>