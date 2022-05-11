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
        <form action="vendor/signup.php" method="post" class="login-form">
            <input type="text" name="username" placeholder="Username"/>
            <input type="email" name="email" placeholder="Email address"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="password" name="password_confirm" placeholder="Confirm password"/>
            <button type="submit">Register</button>
            <p class="message">Already registered? <a href="login.php">Sign In</a></p>
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