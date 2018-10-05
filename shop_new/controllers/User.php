<?php
session_start();
include "../models/Model.php";

if(isset($_POST[submit])){
    $name = trim(strip_tags($_POST[name]));
    $login = trim(strip_tags($_POST[login]));

    $user = getAll($connect, 'user');

    if(strtolower($login) == 'admin'){
        exit("Login Admin can not use!");
    }

    foreach ($user as $item) {
        if($login == $item[login]){
            exit("such login already exists!");
        }
    }

    $phone = trim(strip_tags($_POST[phone]));

    if (filter_var($_POST[email], FILTER_VALIDATE_EMAIL)) {
        $email = trim(strip_tags($_POST[email]));
    }
    $password = trim(strip_tags($_POST[password]));

    newUser($connect, $name, $login, $phone, $email, md5($password));

    $message = "You're registered!";

}

if(isset($_POST[enter])){
    $login = trim(strip_tags($_POST[login]));
    $password = trim(strip_tags($_POST[password]));

    $user = getAll($connect, 'user');
    foreach ($user as $item) {
        if($login == $item[login] and md5($password) == $item[password]){
            $message = "Entered!";
            $_SESSION[login] = $login;
            $_SESSION[password] = $password;
            header("Location: login.php");
        }else{
            $message = "Incorrect data!";
        }
    }
}

if($_GET[action] == 'logout'){
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    session_destroy();
    header('Location: index.php');
}