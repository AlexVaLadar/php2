<?php include_once "../controllers/Basket.php"; ?>
<!DOCTYPE html>
<html>
<?php include_once "../blocks/head.php"; ?>
<body>
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <? include "login.php"; ?>
    <div class="content">
        <ul class="breadcrumbs">
            <li><a href="index.php">Main</a></li> <span>&raquo;</span>
            <li>Catalog</li>
        </ul>
        <h1>Basket</h1>
        <hr>

        <?php
        if(isset($goodsTemp)){
            $i=0;
            echo " <table style='width: 99%' border=\"1\"><tr><td>Title of good</td><td>Price</td><td>Count</td></tr>";
            foreach ($goodsTemp as $good){?>
                    <tr>
                        <td><h3 class="item-name"><a href="item.php?id=<?=$good[id]?>"><?=$good[title]?></a></h3></td>
                        <td><?=$good[price]?> $</td>
                        <td><?=$good[count]?></td>
                    </tr>
            <?
            $i++;
            $price_res += $good[price];
            $count_res += $good[count];
            }

            echo "<tr><td>Count of titles: $i</td><td>All sum: $price_res</td><td>Count of goods: $count_res</td></tr></table>";

            if(isset($_SESSION[login]) && isset($_SESSION[password])){
                echo "<p><a href='basket.php?action=order'><b><u>Place an order</u></b></a></p>";
            }else{
                echo "<p><a href='reg.php'><b><u>You must register or sign in to make an order</u></b></a></p>";
            }

            echo "<p><a href='basket.php?action=clear'><u>Remove goods from basket</u></a></p>";
        }
        ?>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>