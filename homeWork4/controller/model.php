<?php
include "config/database.php";

function getAll($connect, $table, $count, $orderby='id'){
    $query = "SELECT * FROM {$table} order by {$orderby} desc limit {$count}";
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

function getPhotoWithOffset($connect, $table, $offset = 6, $limit = 6)
{
    $query = "SELECT * FROM {$table} order by id limit {$offset}, {$limit}";
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