<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '', 'stay_calm');

$username = $_POST['username'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user['username'],
        "email" => $user['email']
    ];

    header('Location: ../profile.php');

} else {
    $_SESSION['message'] = 'Invalid username or password';
    header('Location: ../login.php');
}
?>
