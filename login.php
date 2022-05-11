 <?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
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
    </div>
</nav>

<div class="login-page">
    <div class="form">
        <form action="vendor/signin.php" method="post" class="login-form">
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            <button type="submit">log in</button>
            <p class="message">Not registered?</p>
            <p class="message"><a href="register.php">Create an account</a></p>
                <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>
</div>
</body>
</html>