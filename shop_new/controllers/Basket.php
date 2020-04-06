<?php
include_once "../models/Model.php";
$count = 1;
if(isset($_POST[id])){
    $id = $_POST[id];
    if(isset($_SESSION[login]) && isset($_SESSION[password])) {
        $login = $_SESSION[login];
    }
    $good = getOne($connect, $id, 'good');
    $_SESSION[basket] = 1;

    $goodTemp = getOneTemp($connect, $id, 'order_tab');
    if(isset($goodTemp)){
        $id = $goodTemp[id_good];
        $count = $goodTemp[count];
        $count++;
        editTempOrder($connect, $id, $count);
    }else{
        newTempOrder($connect, $id_good, $id_user, $count);
    }

   echo "<a href='basket.php'><u>Review goods</u></a>";

}

$goodsTemp = getAll($connect,'order_tab');

if(isset($_GET[action]) and $_GET[action]=='clear'){
    unset($_SESSION['basket']);
    $query = sprintf("DELETE FROM order_tab");
    $result = mysqli_query($connect, $query);
    header('Location: index.php');
}

if(isset($_GET[action]) and $_GET[action]=='order'){

}
