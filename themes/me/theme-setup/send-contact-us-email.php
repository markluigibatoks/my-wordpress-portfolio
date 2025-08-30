<?php
add_action('acf/save_post', 'send_contact_form_email', 20);
function send_contact_form_email($post_id) {

    error_log('send_contact_form_email fired for post ID: ' . $post_id);


    if ($post_id == 'Contact Me') {
        $name = get_field('name', $post_id);
        $email = get_field('email', $post_id);
        $message = get_field('message', $post_id);

        $to = $email;
        $subject = "Thank you for contacting us!";

        // Load template
        ob_start();
        include get_stylesheet_directory() . '/email-templates/contact-us-confirmation.php';
        $body = ob_get_clean();

        $headers = ['Content-Type: text/html; charset=UTF-8'];

        error_log('Name: ' . $name);
error_log('Email: ' . $email);
error_log('Message: ' . $message);

        wp_mail($to, $subject, $body, $headers);
    }
}
?>