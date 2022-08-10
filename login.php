<?php
session_start();
require('app/app.php');


if (user_is_authenticated()) {
    redirect('admin/');
}
if (is_post()) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    if (authentificate($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin/');
    } else {
        $view_bag['$emailerror'] = 'provided credentials are false !';
    }
    if ($email == false) {
        $view_bag['$emailerror'] = 'this is not right';
    }
}
view("login");
