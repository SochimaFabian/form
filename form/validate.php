<?php
/*
$username = $_POST['username'];
$password = $_POST['password'];
*/

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (empty($username)) {
    $name_error = "Please enter your name*";
} elseif (strlen($username) < 6) {
    $name_error = "Please name is too short";
}

if (empty($password)) {
    $password_error = 'Please enter your password*';
} elseif (strlen($password) < 6) {
    $password_error = "Please password is too short*";
}

if (empty($name_error) && empty($password_error)) {
    include('success.php');
} else {
    include('form.php');
}

// include('form.php');
