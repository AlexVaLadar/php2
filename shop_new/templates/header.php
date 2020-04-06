<header>
    <div class="logotip">
        <a href='index.php'><img src="img/logo.jpg" alt="logo" title="shop-online"></a>
    </div>
</header>
<?
    if(isset($_SESSION[basket])) {
        echo "<h3 class=\"basket\">Basket: <span class=\"basket-items\"><a href='basket.php'><u>View products</u></a></span></h3>";
    }else{
        echo "<h3 class=\"basket\">Basket: <span class=\"basket-items\">Basket empty</span></h3>";
    }
?>

