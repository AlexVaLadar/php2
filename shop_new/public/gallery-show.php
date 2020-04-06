<?php
include_once "../controllers/Image.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <?php include_once "../controllers/User.php"; ?>
    <? include "login.php"; ?>
    <div class="content">
    <h1>Photo Gallery</h1>
    <h3><a href="gallery.php"><u>Back to Gallery</u></a></h3>
    <?php
    if(isset($_GET['id']) and isset($img)){
        countRes($connect, $_GET['id']);
        echo "<img src='$img[full_src]' width='90%'><br>Количество просмотров: $img[seen_count]";
    }else{
        echo '<h2>No Images</h2>';
    }

    ?>
</div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>