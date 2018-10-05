<?php include_once "../models/Model.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <?php
    if(isset($_SESSION[login]) && isset($_SESSION[password]) && $_SESSION[login] == 'admin') {
    ?>
    <div class="leftblock">
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="../public/index.php" class="active">Sait</a></li>
                    <li><a href="index.php" class="active">Main</a></li>
                    <li><a href="add_goods.php">Add good</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
    <h1>Admin</h1>
<?
    $goods = getAll($connect, 'good');
    if ($goods) {
        foreach ($goods as $good) {
            ?>
            <div class="item">
                <img src="../public/<?= $good[small_src] ?>" alt="<?= $good[title] ?>" title="<?= $good[title] ?>">
                <h3 class="item-name"><?= $good[title] ?></h3>
                <p class="add-to-basket"><a href="edit_goods.php?id=<?= $good[id] ?>" title="Редактировать">Edit</a>
                </p><br>
                <p class="add-to-basket"><a href="delete_goods.php?id=<?= $good[id] ?>" title="Удалить">Remove</a></p>
            </div>
        <?
        }
    }
}else{
    echo "Login failed or you're not Admin!";
}
?>
    </div>
</div>
</body>
</html>
