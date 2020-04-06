<nav>
    <div class="menu">
        <ul>
            <li><a href="../public/index.php" class="active">Main</a></li>
            <li><a href="../public/catalog.php">Catalog</a></li>
            <li><a href="../public/guestbook.php">Reviews</a></li>
            <li><a href="../public/contact.php">Contacts</a></li>
            <?php
            if(isset($_SESSION[login]) && isset($_SESSION[password])) {
                echo "<li><a href='../public/index.php?action=profile'><u>LK</u></a></li>";
                echo "<li><a href='../public/index.php?action=logout'><u>Exit</u> </a>($_SESSION[login])</li>";
            }else{
                //echo "<li><a href='../public/login.php'><u>Enter</u></a></li>";
                echo "<li><a href='../public/reg.php'><u>Registration</u></a></li>";
            }
            if(isset($_SESSION[login]) && isset($_SESSION[password]) && $_SESSION[login] == 'admin') {
            ?>
            <li><a href="../admin/">Admin</a></li>
            <?}?>
        </ul>
    </div>
</nav>