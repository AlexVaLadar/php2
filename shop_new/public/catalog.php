<?php include_once "../controllers/Product.php"; ?>
<!DOCTYPE html>
<html>
<?php include_once "../blocks/head.php"; ?>
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
            <li>Catalog</li>
        </ul>
        <h1>Gatalog goods</h1>
        <hr>
        <?php
        if(isset($goods)){
            foreach ($goods as $good){?>
                <div class="item">
                    <a href="item.php?id=<?=$good[id]?>"><img src="<?=$good[small_src]?>" alt="<?=$good[title]?>" title="<?=$good[title]?>"></a>
                    <h3 class="item-name"><a href="item.php?id=<?=$good[id]?>"><?=$good[title]?></a></h3>
                    <p class="price"><?=$good[price]?> $</p>
                    <p class="add-to-basket"><a href="#" onclick="item(<?=$good[id]?>)" title="Add to basket">Buy</a></p>
                </div>
            <?}
        }
        ?>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>