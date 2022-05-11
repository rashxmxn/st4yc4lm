<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StaySafe</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav>
    <div id="logo">
        <b>StayCalm</b>
    </div>
    <div id="about">
        <a href="#" title="Meditation">Meditation</a>
        <a href="#" title="About us">About us</a>
        <a href="#" title="Contacts">Contacts</a>
        <a href="vendor/logout.php"  title="Logout">Log out</a>
    </div>
</nav>
<div id="content">
      <form class="info">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['username'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
    </form>
</div>


</body>
</html>