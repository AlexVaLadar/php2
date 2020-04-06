<?php
require_once "../config/database.php";

function getAll($connect, $table, $orderby='id'){
    $query = "SELECT * FROM {$table} order by {$orderby} desc";
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $res = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }

    return $res;
}

function getOne($connect, $id, $table){
    $query = sprintf("SELECT * FROM {$table} where id=%d",(int)$id);
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    $res = mysqli_fetch_assoc($result);

    return $res;
}

function delete($connect, $id, $table){
    $id = (int)$id;

    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM {$table} where id='%d'", $id);
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}


function newProduct($connect, $title, $description, $price, $full_src, $small_src, $available){

    $t = "INSERT INTO good (title, description, price, full_src, small_src, available) VALUES ('%s','%s','%s','%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $title),mysqli_real_escape_string($connect, $description),mysqli_real_escape_string($connect, $price),mysqli_real_escape_string($connect, $full_src),mysqli_real_escape_string($connect, $small_src),mysqli_real_escape_string($connect, $available));

    $result = mysqli_query($connect, $query);

    if(!$result){
        die(mysqli_error($connect));
    }

    return true;
}

function editProduct($connect, $id, $title, $description, $price, $full_src, $small_src, $available){
    $id = (int)$id;

    $sql = "UPDATE good SET title='%s',description='%s',price='%s',full_src='%s',small_src='%s',available='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($connect, $title),mysqli_real_escape_string($connect, $description),mysqli_real_escape_string($connect, $price),mysqli_real_escape_string($connect, $full_src),mysqli_real_escape_string($connect, $small_src),mysqli_real_escape_string($connect, $available),$id);

    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}

function newComment($connect, $login, $comment){

    $t = "INSERT INTO review (login, comment) VALUES ('%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $login),mysqli_real_escape_string($connect, $comment));

    $result = mysqli_query($connect, $query);

    if(!$result){
        die(mysqli_error($connect));
    }else{
        header("Location: ../public/guestbook.php");
    }
}


function countImages($connect, $id, $table){
    $sql = "UPDATE {$table} SET seen_count=seen_count+1 WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
}

function newUser($connect, $name, $login, $phone, $email, $password){

    $t = "INSERT INTO user (name, login, phone, email, password) VALUES ('%s','%s','%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $name),mysqli_real_escape_string($connect, $login),mysqli_real_escape_string($connect, $phone),mysqli_real_escape_string($connect, $email),mysqli_real_escape_string($connect, $password));

    $result = mysqli_query($connect, $query);

    if(!$result){
        die(mysqli_error($connect));
    }

    return true;
}

function newTempOrder($connect, $id_good, $id_user, $count){

    $t = "INSERT INTO order_tab (id_good, id_user, count) VALUES ('%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $id_good),mysqli_real_escape_string($connect, $id_user),mysqli_real_escape_string($connect, $count));

    $result = mysqli_query($connect, $query);

    if(!$result){
        die(mysqli_error($connect));
    }

    return true;
}

function editTempOrder($connect, $id, $count){
    $id = (int)$id;

    $sql = "UPDATE order_tab SET count='%d' WHERE id_good='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($connect, $count),$id);

    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}

function getOneTemp($connect, $id, $table){
    $query = sprintf("SELECT * FROM {$table} where id_good=%d",(int)$id);
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    $res = mysqli_fetch_assoc($result);

    return $res;
}