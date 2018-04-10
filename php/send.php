<?php

    $destination = 'support@ftrenovationslimited.com';
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $message = $_POST['message'];

    $content = 'Name: ' . $name . '\nMail: ' . $mail . '\nMessage: ' . $message;

    mail($destination, 'Customer request', $content);
    header('Location:..gracias.html');

?>