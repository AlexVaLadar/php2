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
        <h1>Shop-Online</h1>
        <p class="hello">Wellcome to Shop-Online</p>
        <p>Cicli Pinarello S.p.A. is an Italian bicycle manufacturer based in Treviso, Italy. Founded in 1952, it supplies mostly handmade bicycles for the road, track and cyclo-cross. The company also produces bicycles under the Opera brand name, and has an in-house component brand – MOST.</p>
            <p>In December 2016, the company was acquired by L Catterton, a private equity group associated with LVMH Moët Hennessy Louis Vuitton SE, better known as LVMH.</p>
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