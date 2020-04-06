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
        <h1>Contacts:</h1>
        <p><b>Phone:</b> +7495 000 0000</p>
        <p><b>Address:</b>Moscow</p>
        <p><b>Email:</b>shop@mail.ru</p>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3c1948155bb548fe663673b36ab421c033da92c82f0cd30937890052e747cb8c&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <hr>
        <h2>Message:</h2>
        <form action="#" class="form-item" method="post">
           <p>
               <label for="display-name">Name:</label>
               <input type="text" id="display-name" name="display-name" size="30" maxlength="20" placeholder="Your name" required>
            </p>
            <p>
               <label for="display-mail">Email:</label>
               <input type="text" id="display-mail" name="display-mail" size="30" maxlength="20" placeholder="Your Email" required>
            </p>
            <p>
               <label for="display-text">About:</label>
               <textarea id="display-text" cols="37" rows="10" maxlength="400"  required></textarea>
            </p>
            <p><input type="submit"></p>
        </form>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>