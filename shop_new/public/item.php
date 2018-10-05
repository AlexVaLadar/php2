<?php include_once "../controllers/Product.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shop-Online</title>
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
        <ul class="breadcrumbs">
            <li><a href="index.php">Main</a></li> <span>&raquo;</span>
            <li><?=$good[title]?></li>
        </ul>
            <div class="item-content">
                <? if(!$good){die("Error 404");} ?>
                <h2><?=$good[title]?></h2>
                <div class="img-big"><img src="<?=$good[full_src]?>" alt="<?=$good[title]?>" title="<?=$good[title]?>"></div>
                <div class="item_desc clearfix">
                    <h3>Description:</h3>
                    <div class="short">
                        <p><?=$good[description]?></p>
                    </div>
                    <div class="o-pay">
                        <p class="price"><?=$good[price]?> $</p>
                        <p class="add-to-basket"><a href="#" title="Add to basket">Buy</a></p>
                    </div>
                </div>
            </div>
        </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>