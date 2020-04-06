<?php
include_once "../models/Model.php";
if($_GET[id]){
    $id= $_GET[id];
    delete($connect, $id,'good');
    header("Location: ../admin/index.php");
}