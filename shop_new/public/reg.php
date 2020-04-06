<?php include_once "../controllers/User.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <? include "login.php"; ?>
    <div class="content">
        <h1>Registration</h1>
        <hr>
        <?
        if(isset($_SESSION[login]) && isset($_SESSION[password])){
            echo "sign-in already done";
        }else{
        echo $message?$message:"";?>
        <form method="post">
            <p>Name: <input type="text" name="name" maxlength="30" placeholder="Enter your name" autofocus required></p>
            <p>Login: <input type="text" name="login" maxlength="30" placeholder="Enter your login" autofocus required></p>
            <p>Phone: <input type="phone" name="phone" maxlength="30" placeholder="Enter your phone" required></p>
            <p>Email: <input type="email" name="email" maxlength="30" placeholder="Enter your email" required></p>
            <p>Password: <input type="password" minlength="2" name="password" placeholder="Enter your password" required></p>
            <input type="submit" name="submit" value="To register" ">
        </form>
        <?}?>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>