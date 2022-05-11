<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '', 'stay_calm');

if (!$connect) {
    die('Error connect to Database');
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$check_username = mysqli_query($connect,"SELECT * FROM `users` WHERE `username` = '$username'");

if (mb_strlen($password) < 8) {
    $_SESSION['message'] = 'Password length is less than 8';
    header('Location: ../register.php');
} else if ($password !== $password_confirm) {
    $_SESSION['message'] = 'Passwords do not match';
    header('Location: ../register.php');
} else if (mysqli_num_rows($check_username) > 0) {
    $_SESSION['message'] = 'Such username already exists';
    header('Location: ../register.php');
    } else {
    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')");
    $_SESSION['message'] = 'Registration is successful';
    header('Location: ../login.php');


}

