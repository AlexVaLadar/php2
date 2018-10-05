<?php
include_once "../models/Model.php";
if($_POST['submit']){
    $login = trim(strip_tags($_POST['login']));
    $comment = trim(strip_tags($_POST['comment']));

    newComment($connect, $login, $comment);
}

$comments = getAll($connect, 'review');
