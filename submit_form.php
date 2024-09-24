<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";


    $file = 'contact_form_data.txt';


    file_put_contents($file, $data, FILE_APPEND);


    echo "Thank you for your message!";

    header('Location: index.html');
    exit();
}
?>
