<!-- contact-confirmation.php -->
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { padding: 20px; background-color: #f9f9f9; border-radius: 5px; }
        .header { font-size: 18px; font-weight: bold; color: #333; }
        .message { margin-top: 10px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>Hi <?php echo $name; ?>,</div>
        <div class='message'>
            Thank you for contacting us!<br><br>
            We received your message:<br>
            <em><?php echo $message; ?></em><br><br>
            We'll get back to you soon!
        </div>
    </div>
</body>
</html>
