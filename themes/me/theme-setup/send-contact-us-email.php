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

    error_log('send_contact_form_email fired');
    error_log('To: ' . $to);
    error_log('Body: ' . $body);

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Mark <hello@markluigibatoctoy.com>'
    ];

    if ( wp_mail($to, $subject, $body, $headers) ) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email failed!';
        error_log('DEBUG: wp_mail failed for ' . $to);
    }
}
?>